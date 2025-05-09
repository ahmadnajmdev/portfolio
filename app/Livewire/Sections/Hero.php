<?php

namespace App\Livewire\Sections;

use App\Models\Section;
use Livewire\Component;

class Hero extends Component
{
    public function render()
    {
        $hero = Section::where('name', 'hero')->first();
        return view('livewire.sections.hero', compact('hero'));
    }
}
