<?php

namespace Database\Seeders;

use App\Models\Camp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'Camp Laravel Backend',
                'slug' => 'camp-laravel-backend',
                'price' => 500000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Camp UI/UX',
                'slug' => 'camp-uiux',
                'price' => 280000,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        Camp::insert($camps);
    }
}
