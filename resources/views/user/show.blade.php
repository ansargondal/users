@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">User Information</h3>
                </div>
                <div class="card-body">
                    <strong>Name: </strong>{{$user->name}}<br>
                    <strong>Email: </strong>{{$user->email}}<br>
                    <strong>Roles: </strong>
                    @forelse($user->roles as $roles)
                        {{$role->name . ','}}
                    @empty
                        <span class="text-warning"> No Role Assigned yet</span>
                    @endforelse
                </div>
                <div class="card-footer">
                    <a href="{{route('users.edit', $user->id)}}" class="btn btn-outline-primary">Edit</a>
                    <a href="{{route('users.confirm', $user->id)}}" class="btn btn-outline-danger">Delete</a>
                    <a href="{{route('users.index')}}" class="btn btn-outline-success">Back</a>
                </div>
            </div>
        </div>
    </div>
@stop