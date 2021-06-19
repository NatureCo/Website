<?php

namespace Tests\Unit;

use Tests\TestCase;

class ScheduleTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_schedule_command()
    {
        $this->artisan('schedule:run')->assertExitCode(0);
    }
}
