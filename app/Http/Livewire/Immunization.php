<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Immunization extends Component
{
    public $immunizations;

    public function mount($immunizations = null)
    {
        // $this->immunizations = $immunizations ?: [];
        if ($immunizations === null) {
            $this->immunizations = $immunizations = [];
        }

        foreach($immunizations as $index => $content) {
            $this->immunizations[(string)$index] = $content;
        }
    }

    public function addAnother()
    {
        $this->immunizations[(string)count($this->immunizations)] = ['date' => null, 'type' => null, 'next_due' => null];
    }

    public function removeLast()
    {
        // $number = count($this->immunizations);

        array_pop($this->immunizations);

        // dd($this->immunizations, $number);
    }

    public function render()
    {
        return view('livewire.immunization');
    }
}
