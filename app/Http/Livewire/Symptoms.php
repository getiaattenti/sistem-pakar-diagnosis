<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Symptom;


class Symptoms extends Component
{

    public $symptoms, $selected_id, $name, $code;
    public $updateMode = false;

    public function render()
    {
        $this->symptoms = Symptom::all();
        return view('livewire.symptoms');
    }

    public function store()
    {
        $validatedSymptom = $this->validate([
            'code' => 'required',
            'name' => 'required',
        ]);
  
        Symptom::create($validatedSymptom); 
    }

    public function edit($id)
    {
        $record = Symptom::findOrFail($id);
        $this->selected_id = $id;
        $this->name = $record->name;
        $this->code = $record->code;
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
            $record = Symptom::find($this->selected_id);
            $record->update([
                'name' => $this->name,
                'code' => $this->code
            ]);
            $this->resetInput();
            $this->updateMode = false;
        }
    }

    private function resetInput()
    {
        $this->name = null;
        $this->code = null;
    }
}
