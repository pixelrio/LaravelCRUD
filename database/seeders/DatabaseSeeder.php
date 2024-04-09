<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Student;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Gary',
            'email' => 'info@pixelr.io',
            'password' => 'password'
        ]);

        Course::factory()->create([
            'courseName' => 'PHP',
            'courseID' => 'HTTP5225',
            'description' => 'Nesciunt ipsa nam esse, quas quos iure non corporis sapiente, voluptate, eum accusantium. Alias, sapiente.'
        ]);

        Course::factory()->create([
            'courseName' => 'Java',
            'courseID' => 'HTTP5226',
            'description' => 'Nesciunt ipsa nam esse, quas quos iure non corporis sapiente, voluptate, eum accusantium. Alias, sapiente.'
        ]);

        Course::factory()->create([
            'courseName' => 'JavaScript',
            'courseID' => 'HTTP5227',
            'description' => 'Nesciunt ipsa nam esse, quas quos iure non corporis sapiente, voluptate, eum accusantium. Alias, sapiente.'
        ]);

        Course::factory()->create([
            'courseName' => 'React',
            'courseID' => 'HTTP5228',
            'description' => 'Nesciunt ipsa nam esse, quas quos iure non corporis sapiente, voluptate, eum accusantium. Alias, sapiente.'
        ]);

        Course::factory()->create([
            'courseName' => 'Vuejs',
            'courseID' => 'HTTP5229',
            'description' => 'Nesciunt ipsa nam esse, quas quos iure non corporis sapiente, voluptate, eum accusantium. Alias, sapiente.'
        ]);


        Student::factory(20)->create();
    }
}
