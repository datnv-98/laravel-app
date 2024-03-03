<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    // SEEDERS là cơ chế tạo tài khoản, tạo dữ liệu trên db ( tạo bằng tay)
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Nguyen Van Dat',
            'email' => 'dat11051998@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}
