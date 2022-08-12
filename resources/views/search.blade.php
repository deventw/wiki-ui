<!-- resources/views/search.blade.php -->

@extends('layouts.app')

@section('title', 'Search')

@section('content')
<h2 class="text-3xl font-bold text-center my-2">搜索 Search</h2>

<div class="container">

<div class="form-floating" >
      <input
        type="email"
        name="email"

        class="form-control text-center"
        id="floatingInput"
        placeholder="name@example.com"

      />
      <label for="floatingInput">Search</label>
    </div>

</div>



@endsection
