<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class ToDoListController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('home', [
            'tasks' => $tasks,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'task' => 'required|min:5',
            ],
            [
                'task.required' => 'Harus diisi',
                'task.min'      => 'Minimal 5 karakter',
            ]
        );

        Task::create([
            'task'    => $request->task,
            'tanggal' => NOW(),
        ]);

        return redirect('/');
    }


    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect('/')->with('success', 'Berhasil dihapus!');
    }
}
