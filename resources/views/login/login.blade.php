@extends('layouts.main')
@section('container')
<div class="row justify-content-center">
  <div class="col-lg-4">
    <main class="form-signin">
      <form action="/login" method="POST">
        @csrf
        
        @if (session()->has('register'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('register') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('loginError') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <center><img class="mb-4" src="../assets/img/logo.png" alt="" width="72" height="72"></center>
        <h1 class="h3 mb-3 fw-normal">Login</h1>
        <div class="form-floating">
          <input type="text" class="form-control" id="username" name="username" placeholder="Username">
          <label for="floatingInput" autofocus required>Username</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          <label for="floatingPassword" required>Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        <small class="d-block text-center mt-3">Not Registered? <a href="/register">Register Now!</a></small>
      </form>
    </main>
  </div>
</div>
@endsection
