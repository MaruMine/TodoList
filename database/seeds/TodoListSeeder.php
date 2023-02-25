<?php

use Illuminate\Database\Seeder;

class TodoListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todo_lists')->insert(
            [
                [
                    'name' => 'Test1',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Test1',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Test1',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
    }
}
