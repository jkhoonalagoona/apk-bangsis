@extends('dashboard.index')
@section('content')
    
  <main class="col-md-9 ms-sm-5 col-lg-8 px-md-1">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Form Data Help Desk</h1>
      </div>
      <form class="row g-3 mb-5 mt-5" action="/data" method="post" enctype="multipart/form-data">
        @if (session()->has('success'))    
    <div class="alert alert-info alert-dismissible fade show col-md-10" role="alert">
      <strong>Selamat </strong>{{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
        @csrf
        <div class="col-md-5">
            <label for="no" class="form-label">Nomor Dokumen</label>
            <input type="number" name="no" class="form-control @error('no') is-invalid @enderror" required value="{{ old('no') }}" id="no">
            @error('no')    
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
        </div>
        <div class="col-md-5">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" id="tangal" value="{{ old('no') }}">
            @error('tanggal')    
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
        </div>
        <div class="col-md-5">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" required value="{{ old('judul') }}" id="judul">
            @error('judul')    
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
        </div>
        <div class="col-md-5">
            <label for="asal" class="form-label">Judul</label>
            <input type="text" name="asal" class="form-control @error('asal') is-invalid @enderror" required value="{{ old('asal') }}" id="asal">
            @error('asal')    
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
        </div>
        {{-- <div class="col-md-5">
            <label for="asal" class="form-label">Asal</label>
            <select id="asal" name="asal" class="form-select" value="{{ old('no') }}">
                <option selected>Pilih...</option>
                <option>Aceh</option>
                <option>Sumatera Utara</option>
                <option>Sumatera Barat</option>
                <option>Riau</option>
                <option>Kepulauan Riau</option>
                <option>Jambi</option>
                <option>Sumatera Selatan</option>
                <option>Bengkulu</option>
                <option>Lampung</option>
                <option>Kepulauan Bangka Belitung</option>
                <option>DKI Jakarta</option>
                <option>Jawa Barat</option>
                <option>Banten</option>
                <option>Jawa Tengah</option>
                <option>DI Yogyakarta</option>
                <option>Jawa Timur</option>
                <option>Bali</option>
                <option>Nusa Tenggara Barat</option>
                <option>Nusa Tenggara Timur</option>
                <option>Kalimantan Barat</option>
                <option>Kalimantan Tengah</option>
                <option>Kalimantan Selatan</option>
                <option>Kalimantan Timur</option>
                <option>Kalimantan Utara</option>
                <option>Sulawesi Utara</option>
                <option>Sulawesi Tengah</option>
                <option>Sulawesi Selatan</option>
                <option>Sulawesi Tenggara</option>
                <option>Gorontalo</option>
                <option>Maluku</option>
                <option>Maluku Utara</option>
                <option>Papua Barat</option>
                <option>Papua</option>
                </select>            
        </div> --}}
        <div class="col-5">
            <label for="tujuan" class="form-label">Tujuan</label>
            <input type="text" name="tujuan" class="form-control @error('tujuan') is-invalid @enderror" required value="{{ old('tujuan') }}" id="tujuan">
            @error('tujuan')    
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
        </div>
        <div class="input-group mb-3 col-5">
          <input type="file" class="form-control" id="image" name="image">
          <label class="input-group-text @error('image') is-invalid @enderror" required for="image">Upload</label>
          @error('image')    
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
        </div>
        {{-- <div class="col-5">
            <label for="file" class="form-label">Link File</label>
            <input type="url" name="file" class="form-control @error('judul') is-invalid @enderror" value="{{ old('file') }}" id="file">
            @error('file')    
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
        </div> --}}
        <div class="col-12 mt-5">
            <button type="submit" class="btn btn-primary">Kirim File</button>
        </div>
        </form>


      
        @endsection