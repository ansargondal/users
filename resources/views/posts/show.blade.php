@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Role Information</h3>
                </div>
                <div class="card-body">
                    <strong>Name: </strong>{{$role->name}}<br>
                    <strong>Description: </strong>{{$role->description}}<br>
                </div>
                <div class="card-footer">
                    <a href="{{route('roles.edit', $role->id)}}" class="btn btn-outline-primary">Edit</a>
                    <a href="{{route('roles.confirm', $role->id)}}" class="btn btn-outline-danger">Delete</a>
                    <a href="{{route('roles.index')}}" class="btn btn-outline-success">Back</a>
                </div>
            </div>
        </div>
    </div>
@stop