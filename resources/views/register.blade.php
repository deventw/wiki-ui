<!-- resources/views/about.blade.php -->

@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="container">
<h2 class="text-3xl font-bold text-center my-2">建立帳號 Register</h2>
  <form action='/register' method='POST'>
    <small class="mb-3 mt-5 fw-normal">填寫下方表單成為會員</small>

    <div class="form-floating">
        <input
          type="username"
          name="username"
          class="form-control"
          id="floatingUsername"
          placeholder="Username"
        />
        <label for="floatingUsername">用戶名</label>
      </div>

    <div class="form-floating">
      <input
        type="email"
        name="email"
        class="form-control"
        id="floatingInput"
        placeholder="name@example.com"
      />
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input
        type="password"
        name="password"
        class="form-control"
        id="floatingPassword"
        placeholder="Password"
      />
      <label for="floatingPassword">密碼</label>
    </div>


    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
    <p class="mt-5 mb-3 text-muted">&copy; A10909001</p>
  </form>
</div>



@endsection
