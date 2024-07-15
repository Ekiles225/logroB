<?php

namespace App\Livewire\Forms;

use App\Models\Tarea;
use Livewire\Form;

class TareaForm extends Form
{
    public ?Tarea $tareaModel;
    
    public $etiqueta = '';
    public $nombre = '';
    public $profesor = '';
    public $descripcion = '';

    public function rules(): array
    {
        return [
			'etiqueta' => 'required',
			'nombre' => 'required|string',
			'profesor' => 'required|string',
			'descripcion' => 'required|string',
        ];
    }

    public function setTareaModel(Tarea $tareaModel): void
    {
        $this->tareaModel = $tareaModel;
        
        $this->etiqueta = $this->tareaModel->etiqueta;
        $this->nombre = $this->tareaModel->nombre;
        $this->profesor = $this->tareaModel->profesor;
        $this->descripcion = $this->tareaModel->descripcion;
    }

    public function store(): void
    {
        $this->tareaModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->tareaModel->update($this->validate());

        $this->reset();
    }
}
