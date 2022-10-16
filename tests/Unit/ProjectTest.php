<?php

namespace Tests\Unit;

use App\Models\Project;
use App\Models\Task;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    /** @test */
    public function has_many_tasks()
    {
        /** @var Project $project */
        $project = Project::factory()->create();

        $project->tasks()->saveMany(Task::factory(5)->make());

        $this->assertCount(5, $project->tasks()->get());
    }
}
