<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Symptom;
use App\Models\DiseaseHasSymptom;
use App\Models\Disease;
use App\Models\Diagnose;
use App\Models\User;

class Diagnoses extends Component
{

    public $symptoms;
    public $selectedtypes = [];
    public $diagnose;
    public $namaPasien, $namaPenyakit, $detailPenyakit, $saranPenyakit;
    public $users, $user;
    
    public function render()
    {
        $this->symptoms = Symptom::all();
        $this->users = User::where('role','=','USER')->get();
        return view('livewire.diagnose');
    }

    public function diagnose() {
        $datas = DiseaseHasSymptom::whereIn('symptoms_id', $this->selectedtypes)->get();
        $disease = [];
        foreach ($datas as $data) {
            array_push($disease, $data->disease_id);
        }

        $total = count($disease);
        $percentages = [];
        foreach(array_count_values($disease) as $value => $count) {
            $percentages[$value] = $count / $total;
        }
        $maxs = array_keys($percentages, max($percentages));

        $user =  json_decode($this->user);

        $data = new Diagnose;
        $data->user_id = $user->id;
        $data->user = $user->name;
        $data->diseases = implode(",",$disease);
        $data->symptoms = implode(",",$this->selectedtypes);
        $data->out_disease_id = $maxs[0];
        $diagnose = Diagnose::create($data->attributesToArray());

        return redirect()->to('/result/'.$diagnose->id);
    }
}
