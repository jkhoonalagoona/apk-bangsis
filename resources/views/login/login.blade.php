
@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-4">
  <div class="col-md-4">
    @if (session()->has('success'))    
    <div class="alert alert-info alert-dismissible fade show" role="alert">
      <strong>Selamat </strong>{{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if (session()->has('LoginError'))    
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('LoginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
        <main class="form-signin w-100">
          <form action="login" method="POST">
            @csrf
            <div class="d-flex justify-content-center">
                <img class="mb-4" src="../image/logotni.png" alt="" width="100" height="100">
            </div>
            <h1 class="h3 mb-3 fw-normal text-center">Silahkan Login</h1>
            <div class="form-floating">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror " id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
              <label for="email">Email</label>
              @error('email')    
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
              <label for="password">Password</label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
          </form>
          <small class="text-center mt-5 mb-5 d-block">Tidak punya akun? <a href="register">Registrasi</a></small>
        </main>
    </div>
</div>
@endsection




