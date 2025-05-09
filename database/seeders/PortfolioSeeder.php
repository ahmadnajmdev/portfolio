<?php

namespace Database\Seeders;

use App\Models\Section;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Skill;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    public function run()
    {
        // Seed Sections
        Section::create([
            'name' => 'hero',
            'title' => 'Full Stack Developer',
            'subtitle' => 'Creating innovative web solutions with modern technologies',
            'content' => 'With expertise in both frontend and backend development, I build scalable and user-friendly applications.',
            'meta' => [
                'cta_primary' => 'View My Work',
                'cta_secondary' => "Let's Connect",
            ],
        ]);

        Section::create([
            'name' => 'about',
            'title' => 'About Me',
            'content' => 'With over 8 years of experience in software development, I specialize in creating robust web applications that solve real-world problems. My approach combines technical expertise with a deep understanding of user needs.',
        ]);

        Section::create([
            'name' => 'projects',
            'title' => 'My Projects',
            'subtitle' => 'Here are some of my recent projects that showcase my skills and expertise in web development.',
        ]);

        Section::create([
            'name' => 'skills',
            'title' => 'Skills & Expertise',
            'subtitle' => 'Technologies and tools I work with',
        ]);

        // Seed Projects
        Project::create([
            'title' => 'E-commerce Dashboard',
            'description' => 'A comprehensive dashboard for online store management with real-time analytics and inventory tracking.',
            'image_url' => '/images/projects/ecommerce-dashboard.jpg',
            'live_url' => 'https://example.com/ecommerce',
            'github_url' => 'https://github.com/example/ecommerce',
            'category' => 'fullstack',
            'technologies' => ['React', 'Node.js', 'MongoDB'],
            'is_featured' => true,
            'sort_order' => 1,
        ]);

        // Seed Experience
        Experience::create([
            'title' => 'Senior Full-Stack Developer',
            'company' => 'Innovate Solutions Inc.',
            'start_date' => '2022-01-01',
            'end_date' => null,
            'description' => 'Leading development of enterprise web applications',
            'type' => 'work',
            'is_current' => true,
            'sort_order' => 1,
        ]);

        // Seed Skills
        $skills = [
            ['name' => 'PHP', 'category' => 'Backend', 'proficiency' => 90],
            ['name' => 'Laravel', 'category' => 'Backend', 'proficiency' => 85],
            ['name' => 'JavaScript', 'category' => 'Frontend', 'proficiency' => 90],
            ['name' => 'React', 'category' => 'Frontend', 'proficiency' => 85],
            ['name' => 'Vue.js', 'category' => 'Frontend', 'proficiency' => 80],
            ['name' => 'MySQL', 'category' => 'Database', 'proficiency' => 85],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}
