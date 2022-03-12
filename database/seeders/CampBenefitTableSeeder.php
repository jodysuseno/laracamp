<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CampBenefit;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefit = [
            [
                'camp_id' => 1,
                'name' => 'Pro TechStack Kit',
            ],
            [
                'camp_id' => 1,
                'name' => 'iMac Pro 2021',
            ],
            [
                'camp_id' => 1,
                'name' => 'Monitoring program',
            ],
            [
                'camp_id' => 1,
                'name' => 'Final Project Certificate',
            ],
            [
                'camp_id' => 1,
                'name' => 'Offline Course Video',
            ],
            [
                'camp_id' => 1,
                'name' => 'Future Job Opurtunity',
            ],
            [
                'camp_id' => 1,
                'name' => 'Premium Design Kit',
            ],
            [
                'camp_id' => 1,
                'name' => 'Website Builder',
            ],
            [
                'camp_id' => 2,
                'name' => '1-1 Monitoring Program',
            ],
            [
                'camp_id' => 2,
                'name' => 'Final Project Certificate',
            ],
            [
                'camp_id' => 2,
                'name' => 'Offline Course Video',
            ],
        ];

        CampBenefit::insert($campBenefit);
    }
}
