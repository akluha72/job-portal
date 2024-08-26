<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Job;

class DatabaseSeeder extends Seeder
{
  
    public function run(): void
    {
        \App\Models\User::factory(300)->create();
        $users = \App\Models\User::all()->shuffle();
        //associate user with employer, user can be only one employer.
        for ($i = 0; $i< 20; $i++){
            \App\Models\Employer::factory()->create([
                'user_id' => $users->pop()->id
            ]);
        }

        $employers = \App\Models\Employer::all();

        for($i = 0; $i < 100; $i++){
            Job::factory()->create([
                'employer_id' => $employers->random()->id
            ]);
        }
        job::factory(100)->create();
    }
}
