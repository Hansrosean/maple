<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    public function run(): void
    {
        $positions = [
            ['position_name' => 'Manager'],
            ['position_name' => 'Supervisor'],
            ['position_name' => 'Senior Staff'],
            ['position_name' => 'Staff'],
            ['position_name' => 'Operator'],
        ];

        DB::table('positions')->insert($positions);
    }
}
