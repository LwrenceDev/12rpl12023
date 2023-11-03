@extends('template.main')
@section('judul','Add User')
@section('konten')
@section('user','active')
<div class="product-card shadow">

    <form action="/user" class="title-section-content" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name">Name</label>
            <input  value="{{old('name')}}" type="text" name="name" class="form-control @error('name') is-invalid
            @enderror">
            @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input value="{{old('email')}}" type="text" name="email" class="form-control  @error('email') is-invalid
            @enderror ">
            @error('email')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="phone">Phone</label>
            <input value="{{old('phone')}}" type="text" name="phone" class="form-control  @error('phone') is-invalid
                
            @enderror">
            @error('phone')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password">Password</label>
            <input value="{{old('password')}}" type="password" name="password" class="form-control  @error('password') is-invalid
                
            @enderror">
            @error('password')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Role</label>
            <select name="role" class="form-control" id="">
                <option value="">--Select Role--</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>

            @error('role')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Add User</button>
        <a href="http://127.0.0.1:8000/user" class="btn btn-secondary">Back</a>
    </form>
</div>

@endsection
