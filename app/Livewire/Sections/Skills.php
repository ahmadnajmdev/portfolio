<?php

namespace App\Livewire\Sections;

use App\Models\Section;
use App\Models\Skill;
use Livewire\Component;

class Skills extends Component
{
    public function render()
    {
        $section = Section::where('name', 'skills')->first();
        $skills = Skill::orderBy('category')
            ->orderBy('sort_order')
            ->get()
            ->groupBy('category');

        return view('livewire.sections.skills', [
            'section' => $section,
            'skills' => $skills
        ]);
    }
}
