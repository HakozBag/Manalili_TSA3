@extends('layouts.app')

@section('title', 'Task List')

@section('content')
    <section class="card">
        <h2>All Tasks</h2>

        <p class="subtitle">
            {{ $tasks->count() }} task(s), ordered by date.
        </p>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th scope="col">Task</th>
                        <th scope="col">Status</th>
                        <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($tasks as $task)
                        <tr>
                            <td>{{ $task->title }}</td>
                            <td>
                                <span class="badge {{ $task->status === 'completed' ? 'completed' : '' }}">
                                    {{ ucfirst($task->status) }}
                                </span>
                            </td>
                            <td>{{ $task->task_date }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">No tasks available.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection