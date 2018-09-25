@extends('layouts.master.layout')

@section('content')

<div class="add-task-form-wrapper">
    <form action="/store" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="formGroupExampleInput">Task Name</label>
            <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Example input">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Task Text</label>
            <input type="text" name="description" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput3">Author ID</label>
            <input type="text" name="user_id" class="form-control" id="formGroupExampleInput3" placeholder="Another input">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput4">Status</label>
            <input type="text" name="status" class="form-control" id="formGroupExampleInput4" placeholder="Another input">
        </div>
        <div class="form-group">
            <input type="submit" class="form-control" value="Save">
        </div>
    </form>

@endsection