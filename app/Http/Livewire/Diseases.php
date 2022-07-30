<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Disease;
use App\Models\Symptom;
use App\Models\DiseaseHasSymptom;
use Illuminate\Support\Facades\DB;

class Diseases extends Component
{
    public $diseases, $selected_id, $name, $code, $description;
    public $updateMode = false;
    public $diseaseHasSymptoms = [];
    public $symptoms;

    public function render()
    {
        $this->diseases = Disease::all();
        $this->symptoms = Symptom::all();
        $this->index = 0;
        return view('livewire.disease');
    }

    public function create() {
        $this->resetInput();
        $this->updateMode = false;
    }

    public function store()
    {
        try {
            DB::beginTransaction();
            $validatedSymptom = $this->validate([
                'code' => 'required',
                'name' => 'required',
                'description' => 'required'
            ]);
    
            $disease = Disease::create($validatedSymptom);
            $datas = [];
            foreach ($this->diseaseHasSymptoms as $symptomId) {
                $data = new DiseaseHasSymptom;
                $data->disease_id = $disease->id;
                $data->symptoms_id = $symptomId;
                $datas[] = $data->attributesToArray();
            }
            DiseaseHasSymptom::insert($datas);
            DB::commit();
            $this->resetInput();
        } catch(\Exception $exp) {
            DB::rollBack();
        }
    }

    public function edit($id)
    {
        $this->resetInput();
        
        $record = Disease::findOrFail($id);
        
        $datas = DiseaseHasSymptom::where('disease_id', '=', $id)->get();
        foreach ($datas as $data) {
            array_push($this->diseaseHasSymptoms, $data->symptoms_id);
        }

        $this->dispatchBrowserEvent('update-form', ['diseaseHasSymptoms' => $this->diseaseHasSymptoms]);

        $this->selected_id = $id;
        $this->name = $record->name;
        $this->code = $record->code;
        $this->description = $record->description;
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric',
            'name' => 'required',
            'code' => 'required'
        ]);
        if ($this->selected_id) {
            $record = Disease::find($this->selected_id);
            $datas = [];
            foreach ($this->diseaseHasSymptoms as $symptomId) {
                $data = new DiseaseHasSymptom;
                $data->disease_id = $record->id;
                $data->symptoms_id = $symptomId;
                $datas[] = $data->attributesToArray();
            }

            try {
                DB::beginTransaction();
                DiseaseHasSymptom::where('disease_id', $record->id)->delete();

                $record->update([
                    'name' => $this->name,
                    'code' => $this->code,
                    'description' => 'required'
                ]);
                DiseaseHasSymptom::insert($datas);
                DB::commit();

                $this->resetInput();
                $this->updateMode = false;
            } catch(\Exception $exp) {
                dd($exp);
                DB::rollBack();
            } 

            
        }
    }

    public function delete($id) {
        if ($id) {
            $record = Disease::where('id', $id);
            DiseaseHasSymptom::where('disease_id', $id)->delete();
            $record->delete();
        }
    }

    private function resetInput()
    {
        $this->dispatchBrowserEvent('reset-form');

        $this->name = null;
        $this->code = null;
        $this->description = null;
        $this->diseaseHasSymptoms = [];
    }
}
