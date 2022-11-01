@extends('layouts.app')

@section('main')
    <div class="mt-5 mx-auto" style="width: 380px">
        <div class="card">
            <div class="card-body">
                <form action="{{ url("/tasks/$task->id") }}" method="POST">
                    @csrf @method('PATCH')
                    <div class="mb-3">
                        <label for="" class="form-label">User</label>
                        <input name="user" type="text" class="form-control" value="{{ old('user', $task->user) }}">
                        <span class="text-danger">
                            @error('user')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Task</label>
                        <textarea name="task" class="form-control" id="" rows="3">{{ old('task', $task->task) }}</textarea>
                        <span class="text-danger">
                            @error('task')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
