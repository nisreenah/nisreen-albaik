<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $experiences = [
            [
                'en_position' => 'Senior Laravel & APIs developer',
                'en_company' => 'Zid company - Saudi Arabia',
                'en_details' => 'Worked full-time, remotely with payments team',
                'start_date' => '2022-07-24',
                'end_date' => '2023-07-24'
            ],
            [
                'en_position' => 'Mid-Senior Laravel & APIs developer',
                'en_company' => 'Academi company - Saudi Arabia',
                'en_details' => 'Worked full-time, remotely, in two positions',
                'start_date' => '2019-10-10',
                'end_date' => '2022-07-21'
            ],
            [
                'en_position' => 'Laravel & APIs developer',
                'en_company' => 'WebApp company - Palestine, Gaza',
                'en_details' => 'Worked full-time, on-site',
                'start_date' => '2017-12-01',
                'end_date' => '2018-03-01'
            ],
            [
                'en_position' => 'Junior Laravel developer',
                'en_company' => 'ZajelSoft company - Palestine, Gaza',
                'en_details' => 'Worked full-time, on-site',
                'start_date' => '2017-09-01',
                'end_date' => '2017-12-01'
            ],
            [
                'en_position' => 'Web developer',
                'en_company' => 'The Ministry of Communication& Information Technology - Palestine, Gaza',
                'en_details' => 'Worked full-time, on-site',
                'start_date' => '2016-06-01',
                'end_date' => '2016-12-01'
            ],
            [
                'en_position' => 'E-content Designer Volunteer',
                'en_company' => 'Quality and Development Department of IUG - Palestine, Gaza',
                'en_details' => 'Worked full-time, on-site',
                'start_date' => '2015-06-01',
                'end_date' => '2015-09-30'
            ],
        ];

        foreach ($experiences as $experience) {
            Experience::create($experience);
        }
    }
}
