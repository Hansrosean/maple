<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    public function run(): void
    {
        $departments = [
            ['department_name' => 'Human Resources'],
            ['department_name' => 'Finance & Accounting'],
            ['department_name' => 'Information Technology'],
            ['department_name' => 'Marketing & Sales'],
            ['department_name' => 'Operations'],
        ];

        DB::table('departments')->insert($departments);
    }
}
