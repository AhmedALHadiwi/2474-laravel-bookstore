<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
        $topics = [
           // General Workplace Topics
           "Project updates", "Workflow improvements", "Team collaboration", "Career development",
           "Feedback", "Company goals", "Industry trends", "Streamlining processes",
           "Leadership opportunities", "Company culture", "Mentorship", "Innovation",
           "Efficiency", "Social", "Scientific", "Wellness", "Growth", "Sustainability",
           "Strategy", "Diversity",
           // Programming and Technology Topics
           "Frontend vs Backend", "JavaScript frameworks", "Server-side frameworks",
           "APIs and RESTful services", "Database optimization", "Responsive design",
           "UX and accessibility", "Version control", "Security", "Web performance",
           "DevOps", "Progressive Web Apps", "Testing and debugging", "HTML5 and CSS3",
           "Real-time data", "Cloud deployment", "Microservices", "Single Page Applications", "SEO"
       ];

        foreach($topics as $topic){
            Topic::create([
                'topic' => $topic
            ]);
        }

    }
}
