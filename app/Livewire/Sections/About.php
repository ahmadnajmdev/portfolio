<?php

namespace App\Livewire\Sections;

use App\Models\Experience;
use App\Models\Section;
use Livewire\Component;

class About extends Component
{
    public function render()
    {
        $section = Section::where('name', 'about')->first();
        $experiences = Experience::orderBy('start_date', 'desc')->get();

        return view('livewire.sections.about', [
            'section' => $section,
            'experiences' => $experiences
        ]);
    }
}
