<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [

            [
                'image' => '/asmaa.jpeg',
                'en_comment' => 'Test',
                'ar_comment' => 'Test',
                'en_name' => 'Asmaa Ali Albaik',
                'en_position'=>'Sr. Frontend developer Zid Company',
            ],
            [
                'image' => '/moh.a.jpeg',
                'en_comment' => 'Nisreen is a highly recommended developer , very motivated and a self-learner that can upgrade her skills fast as time goes on',
                'ar_comment' => 'Nisreen is a highly recommended developer , very motivated and a self-learner that can upgrade her skills fast as time goes on',
                'en_name' => 'Muhammed ali Abdulwahed',
                'en_position'=> 'PHP Laravel|MySQL|Linux|WordPress|SOLID|Design Patterns|SEO|Product Owner|Researching and Covering SDLC from planning to deploying and maintaining are my hobbies',
            ],
            [
                'image' => '/moh.jpeg',
                'en_comment' => 'Its rare to come across hard and cleaver worker like Nisreen. Nisreen has very high experience in Laravel web development for dashboards and APIs, multi-tenancy, AWS. She has special and creative abilities in E-Learning and Online-Learning and Grading systems. Nisreen can create real value by her qualified work.',
                'ar_comment' => 'Its rare to come across hard and cleaver worker like Nisreen. Nisreen has very high experience in Laravel web development for dashboards and APIs, multi-tenancy, AWS. She has special and creative abilities in E-Learning and Online-Learning and Grading systems. Nisreen can create real value by her qualified work.',
                'en_name' => 'Mohammed A. El-Agha',
                'en_position'=> 'Sr. Backend Developer & Web Automation Expert',
            ],
        ];


        foreach ($testimonials as $testimonial){
            Testimonial::create($testimonial);
        }
    }
}
