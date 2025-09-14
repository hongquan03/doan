<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'         => 'Nguyen Van A',
            'email'        => 'nguyenvana@example.com',
            'password'     => bcrypt('123456'),
            'phone_number' => '0123456789',
            'status'       => 'pending',
            'avatar'       => '',
            'address'      => 'Da Nang, Vietnam',
            'role_id'      => 1,

        ]);

        User::create([
            'name'         => 'Tran Thi B',
            'email'        => 'tranthib@example.com',
            'password'     => bcrypt('123456'),
            'phone_number' => '0987654321',
            'status'       => 'pending',
            'avatar'       => '',
            'address'      => 'Gia Lai, Vietnam',
            'role_id'      => 2,

        ]);

        User::create([
            'name'         => 'LA HONG QUAN',
            'email'        => 'hquan@example.com',
            'password'     => bcrypt('8386'),
            'phone_number' => '0988888888',
            'status'       => 'pending',
            'avatar'       => '',
            'address'      => 'Bac Giang, Vietnam',
            'role_id'      => 3,

        ]);
    }
}
