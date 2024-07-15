<?php

namespace App\Livewire\Etiquetas;

use App\Livewire\Forms\EtiquetaForm;
use App\Models\Etiqueta;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public EtiquetaForm $form;

    public function mount(Etiqueta $etiqueta)
    {
        $this->form->setEtiquetaModel($etiqueta);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.etiqueta.show', ['etiqueta' => $this->form->etiquetaModel]);
    }
}
