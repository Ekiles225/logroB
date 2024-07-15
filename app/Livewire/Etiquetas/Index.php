<?php

namespace App\Livewire\Etiquetas;

use App\Models\Etiqueta;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    #[Layout('layouts.app')]
    public function render(): View
    {
        $etiquetas = Etiqueta::paginate();

        return view('livewire.etiqueta.index', compact('etiquetas'))
            ->with('i', $this->getPage() * $etiquetas->perPage());
    }

    public function delete(Etiqueta $etiqueta)
    {
        $etiqueta->delete();

        return $this->redirectRoute('etiquetas.index', navigate: true);
    }
}
