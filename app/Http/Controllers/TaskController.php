<?php

namespace App\Http\Controllers;

use App\Models\Task;
use function GuzzleHttp\Promise\task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        if ($request->search) {
            $tasks = Task::where('task', 'LIKE', "%$request->search%")
                ->paginate(3);
            return $tasks;
        }
        $tasks = Task::paginate(3);

        return view('task.index', [
            'data' => $tasks,
        ]);
    }

    public function create()
    {
        return view('task.create');
    }

    public function store(Request $request)
    {
        Task::create([
            'task' => $request->task,
            'user' => $request->user,
        ]);

        return redirect('/tasks');
    }

    public function show($id)
    {
        $task = Task::find($id);
        return $task;
    }

    public function edit($id)
    {
        return view('task.edit');
    }

    public function update(Request $request, $id)
    {

        $task = Task::find($id);
        $task->update([
            'task' => $request->task,
            'user' => $request->user,
        ]);

        return 'Success';
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        return 'Success';
    }

}
