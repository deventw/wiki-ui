@extends('layouts.app')

@section('title', 'New Wiki')

@section('content')
<div class=" bg-light m-4 p-4 border" style="border-radius:20px;">

<section id="create">
    <div class="container">
        <h2>Create New Post:</h2>
        <form action='/store' method='POST'>
            @csrf
            Title: <input class="form-control" type='text' style="width: 280px" name='title' id='title'>
            <br>
            ImageURL: <input class="form-control" type='text' style="width: 280px" name='image' id='image'>
            <br>
            Description: <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            <br>
            <button type='submit' class='btn btn-primary' style="width: 100px">Create</button>

        </form>

    </div>
</section>
<hr>
<section id="update">
    <div class="container">
        <h2>Update a Wiki:</h2>
        <form action='/update' method='POST'>
            @csrf
            Wiki ID: <input class="form-control" type='text' style="width: 280px" name='id' id='id'>
            <br>
            Description: <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            <br>
            <button type='submit' class='btn btn-warning' style="width: 100px">Update</button>
        </form>

    </div>
</section>
<hr>
<section id="delete">
    <div class="container">
        <h2>Delete a Wiki:</h2>
        <form action='/delete' method='POST'>
            @csrf
            Wiki ID: <input class="form-control" type='text' style="width: 280px" name='id' id='id'>
            <br>

            <button type='submit' class='btn btn-danger' style="width: 100px">Delete</button>
        </form>

    </div>
</section>


</div>


@endsection
