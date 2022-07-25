<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Disease;

class Diseases extends Component
{
    public $diseases, $selected_id, $name, $code, $description;
    public $updateMode = false;

    public function render()
    {
        $this->symptoms = Disease::all();
        $this->index = 0;
        return view('livewire.disease');
    }

    public function create() {
        $this->resetInput();
        $this->updateMode = false;
    }

    public function store()
    {
        $validatedSymptom = $this->validate([
            'code' => 'required',
            'name' => 'required',
            'description' => 'required'
        ]);
  
        Disease::create($validatedSymptom); 

        $this->dispatchBrowserEvent('close-modal');
    }

    public function edit($id)
    {
        $record = Disease::findOrFail($id);
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
            $record->update([
                'name' => $this->name,
                'code' => $this->code,
                'description' => 'required'
            ]);
            $this->resetInput();
            $this->updateMode = false;
        }
    }

    public function delete($id) {
        if ($id) {
            $record = Disease::where('id', $id);
            $record->delete();
        }
    }

    private function resetInput()
    {
        $this->name = null;
        $this->code = null;
        $this->description = null;
    }
}
