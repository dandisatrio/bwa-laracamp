<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminUser = [
            [
                'name' => 'Admin',
                'email' => 'admin@mail.com',
                'email_verified_at' => date('Y-m-d H:i:s', time()),
                'password' => bcrypt('admin123'),
                'is_admin' => true,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]
        ];

        User::insert($adminUser);
    }
}
