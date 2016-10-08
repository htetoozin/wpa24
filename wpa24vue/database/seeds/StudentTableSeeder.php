<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create();

        for($i = 0; $i<10; $i++){
        	Student::create([
        		'name' => $faker->name,
        		'address' => $faker->address,
        		'class_id'	=> '1'
        		]);
        }
    }



}


