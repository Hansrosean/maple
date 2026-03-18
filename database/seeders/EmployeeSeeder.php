<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        // Membuat 20 baris data dummy
        Employee::factory()->count(20)->create();
    }
}
