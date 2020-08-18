<?php

namespace App\Http\Livewire;

use App\Client;
use App\Patient;
use App\Record;
use Exception;
use Livewire\Component;

class StatTile extends Component
{
    public $name;
    public $all;
    public $current;
    public $previous;

    protected function query($name)
    {
        if ($name === 'client') {
            return Client::query();
        }
        if ($name === 'patient') {
            return Patient::query();
        }
        if ($name === 'record') {
            return Record::query();
        }
    }

    public function mount($name)
    {
        if (!in_array($name, ['client', 'patient', 'record'])) {
            throw new Exception('Model for name not found');
        }

        $this->name = $name;
        
        $this->current = $this->query($name)
            ->where('created_at', '>=', now()->startOfWeek()->toDateString())
            ->get()
            ->count();
        $this->previous = $this->query($name)
            ->where('created_at', '>=', now()->subWeek()->startOfWeek()->toDateString())
            ->where('created_at', '<', now()->startOfWeek()->toDateString())
            ->get()
            ->count();
        $this->all = $this->query($name)
            ->get()
            ->count();
    }

    public function render()
    {
        return view('livewire.stat-tile');
    }
}
