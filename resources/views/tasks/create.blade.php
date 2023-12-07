<x-app-layout class="flex justify-center items-center">

        <form method="POST" action="{{ route('tasks.store') }}" enctype="multipart/form-data" class="w-full max-w-md mx-auto my-auto">
        @csrf
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" type="text" name="name" />
            <x-input-error :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="description" :value="__('Description')" />
            <x-text-input id="description" type="text" name="description" :value="old('description')" autofocus />
            <x-input-error :messages="$errors->get('description')"/>
        </div>

        <div class="mt-4 text-center">
            <x-primary-button type="submit">
                {{ __('Créer') }}
            </x-primary-button>
        </div>
    </form>

</x-app-layout>
