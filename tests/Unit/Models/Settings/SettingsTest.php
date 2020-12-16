<?php

namespace Tests\Unit\Models\Settings;

use App\Models\Settings\Dashboard;
use App\Models\Settings\Scale;
use App\Models\Settings\Settings;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class SettingsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_get_all_settings()
    {
        $settings = Settings::factory()->create();
        $dashboard = Dashboard::factory()->make();
        $scale = Scale::factory()->make();

        $this->assertNotFalse($settings->dashboard()->save($dashboard));
        $this->assertNotFalse($settings->scale()->save($scale));

        $settings->fresh();

        $this->assertEquals($dashboard::class, $settings->dashboard::class);
        $this->assertEquals($scale::class, $settings->scale::class);
    }

    /** @test */
    public function with_all_settings_scope_works(): void
    {
        $numSettings = 50;
        $numChildren = count(Settings::$children);
        Settings::factory()->count($numSettings)->withSettings()->create();

        DB::enableQueryLog();
        Settings::all()->each(function (Settings $settings): void {
            if ($settings->dashboard !== null)
                $value = $settings->dashboard->id;
            if ($settings->scale !== null)
                $value = $settings->scale->id;
        });
        DB::disableQueryLog();

        $queryLog = DB::getQueryLog();

        $slowTime = 0.0;
        foreach ($queryLog as $log) {
            $slowTime += $log['time'];
        }

        $this->assertGreaterThanOrEqual($numChildren * $numSettings, count(DB::getQueryLog()));
        DB::flushQueryLog();

        DB::enableQueryLog();
        Settings::withAllSettings()->get()->each(function (Settings $settings): void {
            if ($settings->dashboard !== null)
                $value = $settings->dashboard->id;
            if ($settings->scale !== null)
                $value = $settings->scale->id;
        });
        DB::disableQueryLog();
        $queryLog = DB::getQueryLog();

        $scopeTime = 0.0;
        foreach ($queryLog as $log) {
            $scopeTime += $log['time'];
        }

        $this->assertCount($numChildren + 1, DB::getQueryLog());
        $this->assertLessThan($slowTime, $scopeTime);

        // dd(compact('slowTime', 'scopeTime'));
    }
}
