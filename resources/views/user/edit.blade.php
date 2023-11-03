@extends('template.main')
@section('judul','Edit Data User')
@section('konten')
@section('user','active')
<div class="product-card shadow">

    <form action="/user/{{$user->id}}" class="title-section-content" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="name">Name</label>
            <input  value="{{$user->name}}" type="text" name="name" class="form-control @error('name') is-invalid
            @enderror">
            @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input value="{{$user->email}}" type="text" name="email" class="form-control  @error('email') is-invalid
            @enderror ">
            @error('email')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="phone">Phone</label>
            <input value="{{$user->phone}}" type="text" name="phone" class="form-control  @error('phone') is-invalid
                
            @enderror">
            @error('phone')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password">Password</label>
            <input value="{{$user->password}}" type="password" name="password" class="form-control  @error('password') is-invalid
                
            @enderror">
            @error('password')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Role</label>
            <select name="role" id="" class="form-control @error('role') is-invalid @enderror">
                <option value="{{$user->role}}">--Select Role--</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
            @error('role')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <button value="{{('name')}}" type="submit" class="btn btn-primary">Edit Data</button>
        <a href="http://127.0.0.1:8000/user" class="btn btn-secondary">Back</a>
    </form>
</div>

@endsection
