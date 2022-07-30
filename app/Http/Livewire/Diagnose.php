<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Symptom;
use App\Models\DiseaseHasSymptom;
class Diagnose extends Component
{

    public $symptoms;
    public $selectedtypes = [];
    
    public function render()
    {
        $this->symptoms = Symptom::all();
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
        
        dd($maxs[0]);
    }
}
