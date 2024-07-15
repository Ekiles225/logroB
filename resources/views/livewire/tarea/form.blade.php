<div class="space-y-6">
    
    <div>
        <x-input-label for="etiqueta" :value="__('Etiqueta')"/>
        <x-text-input wire:model="form.etiqueta" id="etiqueta" name="etiqueta" type="text" class="mt-1 block w-full" autocomplete="etiqueta" placeholder="Etiqueta"/>
        @error('form.etiqueta')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="nombre" :value="__('Nombre')"/>
        <x-text-input wire:model="form.nombre" id="nombre" name="nombre" type="text" class="mt-1 block w-full" autocomplete="nombre" placeholder="Nombre"/>
        @error('form.nombre')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="profesor" :value="__('Profesor')"/>
        <x-text-input wire:model="form.profesor" id="profesor" name="profesor" type="text" class="mt-1 block w-full" autocomplete="profesor" placeholder="Profesor"/>
        @error('form.profesor')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="descripcion" :value="__('Descripcion')"/>
        <x-text-input wire:model="form.descripcion" id="descripcion" name="descripcion" type="text" class="mt-1 block w-full" autocomplete="descripcion" placeholder="Descripcion"/>
        @error('form.descripcion')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>