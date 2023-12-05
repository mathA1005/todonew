<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Models\User;

class Taskcontroller extends Controller
{
    public function index()
    {
        $todos = Task::all();
        return view('todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'task' => 'required|max:255',
        ]);

        Task::create([
            'name' => $request->input('task'),
            'description' => $request->input('description'), // Si tu as un champ de description dans ton formulaire
            'is_done' => false, // Par défaut, la nouvelle tâche n'est pas terminée
            'user_id' => User::inRandomOrder()->first()->id,
        ]);

        return redirect()->route('todos.index');
    }

    // Tu peux ajouter d'autres méthodes comme edit, update, destroy, etc.
}
