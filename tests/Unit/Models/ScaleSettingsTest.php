<?php

namespace Tests\Unit\Models;

use App\Models\ScaleSettings;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ScaleSettingsTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function can_get_template_from_type()
    {
        $settings = ScaleSettings::factory(
            ['type' => 'test', 'levels' => 5]
        )->create();

        $this->assertEquals('scales::test.root', $settings->template);
    }

    /** @test */
    public function can_calculate_level_values()
    {
        $settings = ScaleSettings::factory(
            ['type' => 'test', 'levels' => 5]
        )->create();

        $this->assertEquals([
            [
                'index' => 0,
                'value' => 0.0
            ],
            [
                'index' => 1,
                'value' => 2.5
            ],
            [
                'index' => 2,
                'value' => 5.0
            ],
            [
                'index' => 3,
                'value' => 7.5
            ],
            [
                'index' => 4,
                'value' => 10.0
            ],
        ], $settings->levelValues);
    }
}
