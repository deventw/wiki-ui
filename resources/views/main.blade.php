<!-- resources/views/main.blade.php -->

@extends('layouts.app')
@section('title', 'Home Page')
@section('content')
<div class="paper">
    <div class="paper-main">
        <a href="/create" class="btn btn-primary">New/Edit</a>

        <hr class="m-4">
        <div class="post-list">

            <?php
            DB::connection("mysql");

            $services = DB::select('select * from posts');

            foreach ($services as $service) {

                echo (" <div class='post'>" .
                    "<small>ID: $service->id</small><br>" .
                    "<a class='post-title' href='#'>$service->title</a>" .

                    "<img class='post-preview card' width='250px' src='$service->image' />" .

                    "<div class='post-except'>
             $service->description
            <a class='read-more' href='#'> ... </a>
            </div>" .
                    "<div class='post-date'>$service->created_at</div>" .

                    "</div>");
            }

            ?>
        </div>
        <div class="paginator">
            <span class="page-number current">1</span><a class="page-number" href="#">2</a><a class="page-number" href="#">3</a><a class="extend next" rel="next" href="#">Next</a>
        </div>
    </div>
</div>

@endsection
