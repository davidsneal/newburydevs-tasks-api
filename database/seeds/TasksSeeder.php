<?php

use Illuminate\Database\Seeder;

use App\Task;
use App\Http\Resources\TaskResource;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tasks = [
            [
                'content' => 'Say Squadron scramble',
            ],
            [
                'content' => 'Chocks away',
                'completed_at' => now(),
            ],
            [
                'content' => 'I am deleted',
                'deleted_at' => now(),
            ],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}
