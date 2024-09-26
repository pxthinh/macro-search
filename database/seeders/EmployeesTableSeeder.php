<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee; // Đảm bảo rằng bạn đã import model Employee
use Faker\Factory as Faker;
class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 1000000; $i++) {
            Employee::create([
                'employee_code' => 'EMP' . str_pad($i, 6, '0', STR_PAD_LEFT), // Mã nhân viên
                'employee_name' => $faker->name, // Tên nhân viên
                'salary' => $faker->randomFloat(2, 3000, 9000), // Lương ngẫu nhiên từ 3000 đến 9000
                'birth_date' => $faker->date(), // Ngày sinh
            ]);
        }
    }
}
