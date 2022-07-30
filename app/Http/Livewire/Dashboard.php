<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Disease;
use App\Models\Symptom;
use App\Models\Diagnose;
use App\Models\User;

class Dashboard extends Component
{

    public $disease, $symptoms, $users, $diagnoses;

    public function render() {
        $this->disease = Disease::count();
        $this->symptoms = Symptom::count();
        $this->diagnose = Diagnose::count();
        $this->users = User::count();
        return view('livewire.dashboard')->extends('app');
    }
}
