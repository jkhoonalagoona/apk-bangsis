
@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-4">
    <div class="col-md-4">
        <main class="form-registration">
          <form action="register" method="POST">
            @csrf
            <div class="d-flex justify-content-center">
                <img class="mb-4" src="../image/logotni.png" alt="" width="100" height="100">
            </div>
            <h1 class="h3 mb-3 fw-normal text-center">Form Pendaftaran</h1>
            <div class="form-floating">
              <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror " id="name" placeholder="name" required value="{{ old('name') }}">
              <label for="name">Nama</label>
              @error('name')    
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="nama@example.com" required value="{{ old('email') }}">
              <label for="email">Email</label>
              @error('email')    
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
              <label for="password">Password</label>
              @error('password')    
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Daftar</button>
          </form>
          <small class="text-center mt-5 mb-5 d-block">Sudah punya Akun? <a href="login">Login</a></small>
        </main>
    </div>
</div>
@endsection




