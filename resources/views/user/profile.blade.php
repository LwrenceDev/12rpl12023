<?php
use Illuminate\Support\Facades\Auth;
?>
@extends('template.main')
@section('judul','Bio Data')
@section('profile','active')
@section('konten')
<div class="product-card shadow">
    <form enctype="multipart/form-data" action="/profile/{{Auth::user()->id}}" method="post" class="title-section-content">
        @method('put')
        @csrf
        <div class="mb-3">
            <label >Photo</label>
            <input  name="foto" type="file" class="form-control">
            @error('foto')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        <div class="mb-3">
            <label >Name</label>
            <input value="{{Auth::user()->name}}" name="name" type="text" class="form-control @error('name') is-invalid @enderror">
            @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label >Email</label>
            <input value="{{Auth::user()->email}}" name="email" type="email" class="form-control @error('email') is-invalid @enderror">
            @error('email')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label >Phone</label>
            <input value="{{Auth::user()->phone}}" name="phone" type="text" class="form-control @error('phone') is-invalid @enderror">
            @error('phone')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label >Password</label>
            <input placeholder="Masukkan password baru jika mau merubah!" name="password" type="password" class="form-control">
            
        </div>
        <div class="mb-3">
            <button type="sumbit" class="btn btn-warning">Edit Data</button>
        </div>
    </form>
</div>

@if (session('success'))
    <script>
      Swal.fire({
  position: 'center',
  icon: 'success',
  title: '{{session('success')}}',
  showConfirmButton: false,
  timer: 1500
})
    </script>
@endif
@endsection