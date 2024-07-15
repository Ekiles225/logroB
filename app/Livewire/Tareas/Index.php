<?php

namespace App\Livewire\Tareas;

use App\Models\Tarea;
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
        $tareas = Tarea::paginate();

        return view('livewire.tarea.index', compact('tareas'))
            ->with('i', $this->getPage() * $tareas->perPage());
    }

    public function delete(Tarea $tarea)
    {
        $tarea->delete();

        return $this->redirectRoute('tareas.index', navigate: true);
    }
}
