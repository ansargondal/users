@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Dashboard
                        <a href="{{route('roles.create')}}" class="float-right btn btn-primary">New +</a>
                    </div>
                    <div class="card-body">
                        @include('layouts.partials.message')

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <td>ID</td>
                                <td>Name</td>
                                <td>Description</td>
                                <td>Actions</td>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($roles as $role)
                                <tr>
                                    <td>{{$role->id}}</td>
                                    <td>{{$role->name}}</td>
                                    <td>{{$role->description}}</td>
                                    <td>
                                        <a href="{{route('roles.show', $role->id)}}"
                                           class="btn btn-sm btn-outline-primary">View</a>
                                        <a href="{{route('roles.edit', $role->id)}}"
                                           class="btn btn-sm btn-outline-primary">Edit</a>
                                        <a href="{{route('roles.confirm', $role->id)}}"
                                           class="btn btn-sm btn-outline-danger">Delete</a>
                                    </td>
                                </tr>
                            @empty
                                <td colspan="5" class="text-center">No Roles Found! <a href="{{route('roles.create')}}">Create
                                        New</a></td>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center">
                        {{$roles->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
