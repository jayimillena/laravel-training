@extends('layouts.app')

@section('title', 'Tasks list')
@section('content')
<h1>The list of tasks</h1>
<a href="{{ route('task.create') }}">Add task</a>

<div>
  {{-- @if (count($tasks)) --}}
  @forelse ($tasks as $task)
  <div>
    <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
  </div>
  @empty
  <div>There are no tasks!</div>
  @endforelse
  {{-- @endif --}}
</div>
@endsection