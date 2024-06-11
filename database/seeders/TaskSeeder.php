<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'id' => 1,
            'title' => 'Buy groceries',
            'description' => 'Task 1 description',
            'long_description' => 'Task 2 long description',
            'completed' => false,
            'created_at' => '2023-03-01 12:00:00',
            'updated_at' => '2023-03-01 12:00:00',
        ]);

        Task::create([
            'id' => 2,
            'title' => 'Task 2',
            'description' => 'Task 2 description',
            'long_description' => null,
            'completed' => false,
            'created_at' => '2023-03-02 12:00:00',
            'updated_at' => '2023-03-02 12:00:00'
        ]);

        Task::create([
            'id' => 3,
            'title' => 'Learn programming',
            'description' => 'Task 3 description',
            'long_description' => 'Task 3 long description',
            'completed' => true,
            'created_at' => '2023-03-03 12:00:00',
            'updated_at' => '2023-03-03 12:00:00',
        ]);

        Task::create([
            'id' => 4,
            'title' => 'Take dogs for a walk',
            'description' => 'Task 4 description',
            'long_description' => null,
            'completed' => false,
            'created_at' => '2023-03-04 12:00:00',
            'updated_at' => '2023-03-04 12:00:00',
        ]);
    }
}
