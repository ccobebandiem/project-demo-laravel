<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
         	DepartmentTableSeeder::class,
         	EmployeeNewTableSeeder::class,
         	DepartmentNewTableSeeder::class,
         	EmployeeTableSeeder::class
         ]);
    }
}


class DepartmentTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('department')->insert([
        	array('name' => 'IT', 'description' => '5000'),
        	array('name' => 'Test', 'description' => 'Tester'),
        	array('name' => 'PM', 'description' => 'good'),
        ]);
    }
}

class DepartmentNewTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('department_new')->insert([
        	array('name' => 'IT', 'description' => '5000'),
        	array('name' => 'Test', 'description' => 'Tester'),
        	array('name' => 'PM', 'description' => 'good'),
        ]);
    }
}

class EmployeeTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('employee')->insert([
        	array('name' => str_random(10), 'description' => '5000', 'department_id' => 1, 'birthDate' => Carbon::create('2000', '01', '01')),
        	array('name' => str_random(10), 'description' => 'Tester', 'department_id' => 1, 'birthDate' => Carbon::create('2000', '01', '01')),
        	array('name' => str_random(10), 'description' => 'good', 'department_id' => 2, 'birthDate' => Carbon::create('2000', '01', '01')),
        	array('name' => str_random(10), 'description' => 'good', 'department_id' => 3, 'birthDate' => Carbon::create('2000', '01', '01')),
        ]);
    }
}

class EmployeeNewTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('employee_new')->insert([
        	array('name' => str_random(10), 'description' => '5000', 'department_id' => 1, 'birthDate' => Carbon::create('2000', '01', '01')),
        	array('name' => str_random(10), 'description' => 'Tester', 'department_id' => 1, 'birthDate' => Carbon::create('2000', '01', '01')),
        	array('name' => str_random(10), 'description' => 'good', 'department_id' => 2, 'birthDate' => Carbon::create('2000', '01', '01')),
        	array('name' => str_random(10), 'description' => 'good', 'department_id' => 3, 'birthDate' => Carbon::create('2000', '01', '01')),
        ]);
    }
}