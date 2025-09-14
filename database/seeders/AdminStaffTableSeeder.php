<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminStaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'         => 'Admin User',
            'email'        => 'admin@example.com',
            'password'     => bcrypt('123456'),
            'phone_number' => '09999999',
            'status'       => 'active',
            'avatar'       => '',
            'address'      => 'Da Nang, Vietnam',
            'role_id'      => 1,
        ]);

        User::create([
            'name'         => 'Staff User',
            'email'        => 'staff@example.com',
            'password'     => bcrypt('123456'),
            'phone_number' => '08888888',
            'status'       => 'active',
            'avatar'       => '',
            'address'      => 'Gia Lai, Vietnam',
            'role_id'      => 2,
        ]);
    }
}
