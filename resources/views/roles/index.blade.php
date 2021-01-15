@extends('layout/layout2')

@section('title', 'Roles')
@section('content')
<div class="container-fluid p-4">
    <div class="card">
        <h5 class="card-header">roles</h5>
        <div class="card-body">
            <a href="/roles/create" class="btn bg-blue font-weight-bold text-white my-3 p-2 pr-4 "><i class="fa fa-plus pl-3 pr-3"></i> Add</a>
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
                            <div class="col mr-auto align-self-center font-weight-bolder" style="width: 60px;">Role ID</div>
                            <div class="col mr-auto align-self-center font-weight-bolder">Name</div>
                        </div>
                    </div>
                    @foreach( $roles as $r )
                    <div class="card shadow bg-white align-self-center mb-3 p-3">
                        <div class="row">
                            <div class="col mr-auto align-self-center" style="width: 60px;">{{ $loop->iteration}}</div>
                            <div class="col align-self-center ">{{ $r->name }}</div>
                        </div>
                    </div>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection