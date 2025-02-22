<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Manipulator extends Component
{
    use WithFileUploads;

    public $image;

    public function upload()
    {
        $this->validate([
            'image' => 'image|max:4096',
        ]);
    }

    public function render()
    {
        return view('livewire.manipulator');
    }
}
