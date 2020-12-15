<?php

namespace Tests\Unit\Actions;

use App\Actions\Mood\CreateMood;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class CreateMoodTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function can_create_from_array()
    {
        $payload = [
            'value' => 6.8,
        ];

        $mood = $this->action()->execute($payload);

        $this->assertTrue($mood->wasRecentlyCreated);
        $this->assertNotNull($mood->id);
        $this->assertEquals(6.8, $mood->value);
    }

    /** @test */
    public function can_create_thoughts_when_present()
    {
        $payload = [
            'value' => 4.2,
            'thoughts' => [
                'a little thought',
                'another thought',
                'an additional thought',
            ]
        ];

        $mood = $this->action()->execute($payload);

        $this->assertCount(3, $mood->thoughts);
        $this->assertEquals(4.2, $mood->value);    
    }

    protected function action(): CreateMood
    {
        return app(CreateMood::class);
    }
}
