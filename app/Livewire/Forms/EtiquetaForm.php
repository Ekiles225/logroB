<?php

namespace App\Livewire\Forms;

use App\Models\Etiqueta;
use Livewire\Form;

class EtiquetaForm extends Form
{
    public ?Etiqueta $etiquetaModel;
    
    public $etiqueta = '';

    public function rules(): array
    {
        return [
			'etiqueta' => 'required|string',
        ];
    }

    public function setEtiquetaModel(Etiqueta $etiquetaModel): void
    {
        $this->etiquetaModel = $etiquetaModel;
        
        $this->etiqueta = $this->etiquetaModel->etiqueta;
    }

    public function store(): void
    {
        $this->etiquetaModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->etiquetaModel->update($this->validate());

        $this->reset();
    }
}
