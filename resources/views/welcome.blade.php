@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <section class="card">
       <h2>Welcome!</h2>
    <p>Here's what you have planned for today.</p>

        <p class="subtitle">
            {{ today()->format('F j, Y') }}
            &middot; {{ $tasks->count() }} task(s) scheduled
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
                            <td colspan="3">No tasks scheduled for today.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection