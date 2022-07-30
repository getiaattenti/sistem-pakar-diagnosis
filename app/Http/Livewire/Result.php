<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Diagnose;
use App\Models\Disease;

class Result extends Component
{
    public $diagnose;
    public $disease;

    public function mount($id) {
        $this->diagnose = Diagnose::find($id);
        $this->disease = Disease::find( $this->diagnose->out_disease_id);
    }

    public function render()
    {
        return view('diagnose.result')->extends('app');
    }
}
