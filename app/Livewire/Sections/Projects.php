<?php

namespace App\Livewire\Sections;

use App\Models\Project;
use App\Models\Section;
use Livewire\Component;

class Projects extends Component
{
    public function render()
    {
        $section = Section::where('name', 'projects')->first();
        $projects = Project::orderBy('sort_order')->get();
        return view('livewire.sections.projects', [
            'section' => $section,
            'projects' => $projects
        ]);
    }
}
