<?php

namespace Tests\Unit;

use App\Models\Project;
use App\Models\Task;
use Tests\TestCase;

class TaskTest extends TestCase
{
    /** @test */
    public function test_example()
    {
        /** @var Project $project */
        $project = Project::factory()->create();

        /** @var Task $task */
        $task = Task::factory()->create([
            'project_id' => $project
        ]);

        $this->assertDatabaseHas('tasks', [
            'project_id' => $project->id,
            'id' => $task->id
        ]);
    }
}
