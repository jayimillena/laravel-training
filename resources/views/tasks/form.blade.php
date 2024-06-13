@extends('layouts.app')

@section('title', 'Create task')
@section('content')
<a href="{{ route('tasks.index') }}">Back</a>

<div>
  <form action="{{ route('task.store') }}" method="POST">
    @csrf 
    <div>
      <label for="title">Title</label>
      <input type="text" name="title" value="" placeholder="Enter a Title" />
    </div>

    <div>
      <label for="description">Description</label>
      <textarea name="description" id="" cols="30" rows="10"></textarea>
    </div>

    <div>
      <label for="long_description">Long Description</label>
      <textarea name="long_description" cols="30" rows="10"></textarea>
    </div>

    <div>
      <input type="submit" name="save_task" value="Save" />
    </div>
  </form>
</div>
@endsection