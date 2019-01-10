<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'Narse',
            'email' => 'wambua433@gmail.com',
            'password' => '1234'
        ]);

        DB::table('tasks')->insert([
            'email' => 'wambua433@gmail.com',
            'date'  => '12/12/2019',
            'start_time' => '15/12/2019',
            'end_time' => '27/12/2019',
            'project' => 'timesheets',
            'task' => 'Strike for no good reason'
        ]);

        DB::table('projects')->insert([
            'name' => 'timesheets'
        ]);


    }
}
