<?php

namespace App\Livewire\Etiquetas;

use App\Livewire\Forms\EtiquetaForm;
use App\Models\Etiqueta;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Edit extends Component
{
    public EtiquetaForm $form;

    public function mount(Etiqueta $etiqueta)
    {
        $this->form->setEtiquetaModel($etiqueta);
    }

    public function save()
    {
        $this->form->update();

        return $this->redirectRoute('etiquetas.index', navigate: true);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.etiqueta.edit');
    }
}
