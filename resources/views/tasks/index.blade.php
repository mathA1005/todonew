<x-app-layout class="flex justify-center items-center min-h-screen">
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
            <x-input-error :messages="$errors->get('description')" />
        </div>

        <div class="mt-4">
            <x-primary-button type="submit">
                {{ __('Créer') }}
            </x-primary-button>
        </div>
    </form>

    <br>

    <div class="w-full max-w-md">
        <h2>Liste des tasks {{ Auth::user()->name }}</h2>
        <ul>
            @foreach ($tasks as $task)
                <li>
                    <div>
                        <form method="POST" action="{{ route('tasks.status', $task) }}">
                            @csrf
                            @method('PATCH')
                            <input type="checkbox" name="is_done" {{ $task->is_done ? 'checked' : '' }} onchange="this.form.submit()">
                            <label for="is_done">{{ $task->name }}</label>
                        </form>
                    </div>
                    <div>
                        <strong>Description:</strong> {{ $task->description }}
                    </div>
                    <form method="POST" action="{{ route('tasks.delete', $task) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">
                            Supprimer
                        </button>
                    </form>
                </li>
                <br>
            @endforeach
        </ul>
    </div>

</x-app-layout>


