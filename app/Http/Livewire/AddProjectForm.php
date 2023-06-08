<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;

class AddProjectForm extends Component
{
    public $title;
    public $description;

    public function submit()
    {
        $validatedData = $this->validate([
            'title' => 'required|min:6',
            'description' => 'required|max:420',
        ]);
  
        Project::create($validatedData);
      }

    public function render()
    {
        return view('livewire.add-project-form');
    }
}
