<div class="space-y-6">
    
    <div>
        <x-input-label for="etiqueta" :value="__('Etiqueta')"/>
        <x-text-input wire:model="form.etiqueta" id="etiqueta" name="etiqueta" type="text" class="mt-1 block w-full" autocomplete="etiqueta" placeholder="Etiqueta"/>
        @error('form.etiqueta')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>