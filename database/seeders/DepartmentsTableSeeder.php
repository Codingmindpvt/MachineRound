<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $departments =  [
            [
              'name' => 'Laravel Developer',
            ],
            [
              'name' => 'NodeJs Developer',
            ],
            [
              'name' => 'Python Developer',
            ],
            [
              'name' => 'ReactJs Developer',
            ]
          ];

          Department::insert($departments);

    }
}
