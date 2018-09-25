@extends('layouts.master.layout')

@section('content')

<div id="page-content-wrapper">
    <div class="container-fluid">

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Author</th>
                    <th scope="col">Created</th>
                </tr>
                </thead>
                <tbody>

                @foreach($tasks as $task)
                    <tr>
                        <th scope="row">$task->id</th>
                        <td>$task->name</td>
                        <td>$task->description</td>
                        <td>@$task->author_id</td>
                        <td>@$task->created_at</td>
                    </tr>
                @endforeach

                </tbody>
            </table>

    </div>
</div>

@endsection