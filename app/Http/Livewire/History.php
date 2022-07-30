<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Diagnose;
use App\Models\Disease;

class History extends Component
{
    public $diagnosis;
    public $index;

    public function render()
    {
        $this->index = 0;
        $this->diagnosis = Diagnose::all();

        foreach ($this->diagnosis as $diagnosa) {
            $disease = Disease::find($diagnosa->out_disease_id);
            $diagnosa->out_disease = $disease;
        }

        return view('livewire.history');
    }

    public function detail($id) {
        return redirect()->to('/result/'.$id);
    }
}