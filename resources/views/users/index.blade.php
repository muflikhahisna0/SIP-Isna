@extends('layout/layout2')

@section('title', 'Users')
@section('content')
<div class="container-fluid p-4">
    <div class="card">
        <h5 class="card-header text-primary">Users</h5>
        <a href="/users/create" class="btn-sm btn-primary bg-blue font-weight-bold text-white my-3 p-2 pr-4 "><i class="fa fa-plus pl-3 pr-3"></i> Add</a>
        <div class="card-body">
            <a href="/users/create" class="btn bg-blue font-weight-bold text-white my-3 p-2 pr-4 "><i class="fa fa-plus pl-3 pr-3"></i> Add</a>
            @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <table class="table table-borderless">
                <tbody>
                    <div class="card  bg-primary align-self-center mb-3 p-4">
                        <div class="row text-white">
                            <div class="col-auto mr-auto align-self-center font-weight-bolder" style="width: 60px;">No</div>
                            <div class="col-1 mr-auto align-self-center font-weight-bolder">Role ID</div>
                            <div class="col align-self-center font-weight-bolder">Name</div>
                            <div class="col align-self-center font-weight-bolder">Username</div>
                            <div class="col align-self-center font-weight-bolder">Email</div>
                            <div class="col align-self-center font-weight-bolder">Password</div>
                            <div class="col-3 ml-auto align-self-center font-weight-bolder">Actions</div>
                        </div>
                    </div>
                    @foreach( $users as $u )
                    <div class="card shadow bg-white align-self-center mb-3 p-3">
                        <div class="row">
                            <div class="col-auto mr-auto align-self-center" style="width: 60px;">{{ $loop->iteration}}</div>
                            <div class="col-1 align-self-center ">{{ $u->role_id }}</div>
                            <div class="col align-self-center ">{{ $u->name }}</div>
                            <div class="col align-self-center ">{{ $u->username }}</div>
                            <div class="col align-self-center ">{{ $u->email }}</div>
                            <div class="col align-self-center ">{{ $u->password }}</div>
                            <div class="col-3 ml-auto align-self-center ">
                                <a href="{{ $u->id }}/edit" class="btn btn-success  text-white font-weight-bold">Edit</a>
                                <form action="{{ $u->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger text-white font-weight-bold">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection