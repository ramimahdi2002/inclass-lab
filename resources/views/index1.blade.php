@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Task List</div>

                <div class="card-body">
                    @if ($tasks->count() > 0)
                        <ul class="list-group">
                            @foreach ($tasks as $task)
                                <li class="list-group-item">
                                    <strong>Title:</strong> {{ $task->title }}<br>
                                    <strong>Description:</strong> {{ $task->description }}<br>
                                    <strong>Due Date:</strong> {{ $task->due_date }}<br>
                                    <strong>Status:</strong> {{ $task->status }}<br>
                                    <strong>Category:</strong> {{ $task->category }}<br>
                                    <strong>Priority Level:</strong> {{ $task->priority_level }}<br>
                                  
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>No tasks found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
