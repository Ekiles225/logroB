<?php

namespace App\Livewire\Tareas;

use App\Livewire\Forms\TareaForm;
use App\Models\Tarea;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public TareaForm $form;

    public function mount(Tarea $tarea)
    {
        $this->form->setTareaModel($tarea);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.tarea.show', ['tarea' => $this->form->tareaModel]);
    }
}
