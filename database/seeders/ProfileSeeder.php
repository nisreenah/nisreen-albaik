<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create([
            'en_name'=> 'Nisreen Albaik',
            'en_title' => 'Information Technology',
            'en_major' => 'Senior Laravel & APIs Developer',
            'en_country'=> 'Palestine - Gaza',
            'en_address' => 'Gaza - Mokhabarat street',
            'email'=> 'nisreen.baik@gmail.com',
            'date_of_birth'=> '1992-05-15',
            'phone'=> '00905527086650',
            'facebook'=>'https://www.facebook.com/nisreenah.albaik',
            'linkedIn'=>'https://www.linkedin.com/in/nisreen-albaik/',
            'twitter'=>'https://twitter.com/nisreenah',
            'telegram'=>'https://twitter.com/nisreenah',
            'skype'=>'https://twitter.com/nisreenah',
            'en_interest' => 'I am interested in ّcoding, technology, cooking, taking photos, drawing flowers, decoration, and reading',
            'en_summary' => 'I am interested in ّcoding, technology, cooking, taking photos, drawing flowers, decoration, and reading',
            'en_bio'=> 'I am a PHP Laravel & APIs Developer with over than 6 years of experience, I am a passionate person, I work with sincerity and perfection, neat and tactful, and strive to keep pace with development',
            'CV'=>'/images/cv/1691151135822dev-nisreen-albaik-cv-may-2023.pdf'
        ]);
    }
}
