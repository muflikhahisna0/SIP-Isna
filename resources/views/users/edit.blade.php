@extends('layout/layout')

@section('title', 'Form Edit Users')
@section('content')
<div class="container-fluid p-4">
    <div class="row">
        <div class="col">
            <div class="card">
                <h5 class="card-header">Form Edit Users</h5>
                <div class="card-body">
                    <form method="post" action="/users/{{ $users->id }}">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="role_id" class="col col-form-label">Role ID</label>
                            <input type="text" class="form-control  @error('role_id') is-invalid @enderror" name="role_id" id="role_id" value="{{ $users->role_id }}">
                            @error('role_id')
                            <div id="role_id" class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name" class="col col-form-label">Name</label>
                            <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" id="inputName" value="{{ $users->name}}">
                            @error('name')
                            <div id="name" class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="username" class="col col-form-label">Username</label>
                            <input type="text" class="form-control  @error('username') is-invalid @enderror" name="username" id="username" value="{{ $users->username }}">
                            @error('name')
                            <div id="username" class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-row">
                            <div class="col form-group">
                                <label for="email" class="col col-form-label">Email</label>
                                <input type="text" class="form-control  @error('email') is-invalid @enderror" name="email" id="email" value="{{$users->email }}">
                                @error('email')
                                <div id="email" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col form-group ">
                                <label for="password" class="col col-form-label">password</label>
                                <input type="text" class="form-control  @error('password') is-invalid @enderror" name="password" id="password" value="{{ $users->password }}">
                                @error('password')
                                <div id="password" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col">
        </div>
    </div>
</div>

@endsection