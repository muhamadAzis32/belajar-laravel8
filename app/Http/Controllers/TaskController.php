<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Tasks;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TaskController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        // $this->middleware('is_admin');
    }

    public function index(Request $request)
    {
        if ($request->search) {
            $tasks = Tasks::where('task', 'LIKE', "%$request->search%")
                ->paginate(3);
            return $tasks;
        }
        $tasks = Tasks::paginate(3);

        return view('task.index', [
            'data' => $tasks,
        ]);
    }

    public function create()
    {
        return view('task.create');
    }

    public function store(TaskRequest $request)
    {
        $request->validate([
            'task' => ['required'],
            'user' => ['required'],
        ]);

        Tasks::create([
            'task' => $request->task,
            'user' => $request->user,
        ]);

        return redirect('/tasks');
    }

    public function show($id)
    {
        $task = Tasks::find($id);
        return $task;
    }

    public function edit($id)
    {
        $task = Tasks::find($id);
        return view('task.edit', compact('task'));
    }

    public function update(TaskRequest $request, $id)
    {
        $task = Tasks::find($id);
        $task->update([
            'task' => $request->task,
            'user' => $request->user,
        ]);

        return redirect('/tasks');
    }

    public function destroy($id)
    {
        $task = Tasks::find($id);
        $task->delete();

        return redirect('/tasks');
    }

}
