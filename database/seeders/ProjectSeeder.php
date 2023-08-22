<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        for ($i=0; $i<70; $i++){
            $newProject = new Project();
            $newProject->name =ucfirst($faker->unique()->word(5, true));
            $newProject->goal =ucfirst($faker->paragraph());
            $newProject->link =$faker->url();
            $newProject->save();
        }
    }
}
