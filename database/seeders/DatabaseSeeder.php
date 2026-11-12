<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['username' => 'cyrus'],
            [
                'full_name' => 'Cyrus Dominic Manalili',
                'email' => 'cdmanalili@gmail.com',
                'password' => Hash::make('password'),
            ]
        );

        $tasks = [
            ['title' => 'Buy groceries',       'status' => 'completed', 'days' => -1],
            ['title' => 'Clean my room',      'status' => 'completed', 'days' => -1],
            ['title' => 'Do the laundry',     'status' => 'pending',   'days' => 0],
            ['title' => 'Walk the dog',       'status' => 'pending',   'days' => 0],
            ['title' => 'Finish homework',    'status' => 'pending',   'days' => 0],
            ['title' => 'Water the plants',   'status' => 'pending',   'days' => 0],
            ['title' => 'Pay the bills',      'status' => 'pending',   'days' => 1],
            ['title' => 'Visit the market',   'status' => 'pending',   'days' => 1],
        ];

        foreach ($tasks as $index => $task) {
            Task::updateOrCreate(
                ['id' => $index + 1],
                [
                    'title' => $task['title'],
                    'status' => $task['status'],
                    'task_date' => today()
                        ->addDays($task['days'])
                        ->toDateString(),
                ]
            );
        }
    }
}