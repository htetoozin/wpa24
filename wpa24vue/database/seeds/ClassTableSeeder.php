<?php

use Illuminate\Database\Seeder;
use App/ReClass; //Important to add

class ClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ReClass::create([
        	'name' => 'WPA',
        	'start_date' => '2016-08-01',
        	'end_date' => '2016-12-01'
        	]);
    }
}
