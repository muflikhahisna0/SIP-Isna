@extends('layout/layout')

@section('title', 'Form Add Users')
@section('content')
<div class="container-fluid ">
    <div class="row">
        <h1>Form ADD </h1>
        <form method="post" action="/teacher">
            @csrf
            <div class="form-group">
                <label for="role_id" class="col-sm-2 col-form-label">Role ID</label>
                <input type="text" class="form-control  @error('role_id') is-invalid @enderror" name="role_id" id="role_id" value="{{ old('role_id') }}">
                @error('role_id')
                <div id="role_id" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" id="inputName" value="{{ old('name') }}">
                @error('name')
                <div id="name" class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-row">
                <div class="col form-group">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <input type="text" class="form-control  @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}">
                    @error('email')
                    <div id="email" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col form-group ">
                    <label for="password" class="col-sm-2 col-form-label">password</label>
                    <input type="text" class="form-control  @error('password') is-invalid @enderror" name="password" id="password" value="{{ old('password') }}">
                    @error('password')
                    <div id="password" class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</div>

@endsection