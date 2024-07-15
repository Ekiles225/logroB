<?php

namespace App\Livewire\Tareas;

use App\Livewire\Forms\TareaForm;
use App\Models\Tarea;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    public TareaForm $form;

    public function mount(Tarea $tarea)
    {
        $this->form->setTareaModel($tarea);
    }

    public function save()
    {
        $this->form->update();

        return $this->redirectRoute('tareas.index', navigate: true);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.tarea.edit');
    }
}
