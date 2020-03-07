@extends('layouts.app')

@section('content')
<h1 class="text-center my-5">Create todo</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Create new todo
            </div>
            <div class="card-body">
                <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <textarea name="description" placeholder="Description" id="" cols="5" rows="5"
                                  class="form-control"></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-success">Create todo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
