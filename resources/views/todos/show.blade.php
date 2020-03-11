@extends('layouts.app')

@section('title')
    Single Todo: {{ $todo->name }}
@endsection

@section('content')
 <h1 class="text-center my-5">
     {{ $todo->name }}
 </h1>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card mb-2">
            <div class="card-header">
                Details
            </div>
            <div class="card-body">
                {{ $todo->description }}
            </div>
        </div>
        <a href="/todos/{{ $todo->id }}/edit" class="btn btn-info">Edit</a>
        <form style="display: inline-block" action="/todos/{{ $todo->id }}/delete" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">
                Delete
            </button>
        </form>
    </div>
</div>
@endsection
