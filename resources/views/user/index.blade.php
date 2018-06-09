@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card text-center">
                    <div class="card-header">Dashboard
                        <a href="{{route('users.create')}}" class="float-right btn btn-primary">New +</a>
                    </div>
                    <div class="card-body">
                        @include('layouts.partials.message')

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <td>ID</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Role</td>
                                <td>Actions</td>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td><a href="{{route('users.show', $user->id)}}">{{$user->name}}</a></td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        @forelse($user->roles as $role)
                                            {{$role->name}},
                                        @empty
                                            <a href="#">Assign a role</a>
                                    @endforelse
                                    <td>
                                        <a href="{{route('users.show', $user->id)}}"
                                           class="btn btn-sm btn-outline-primary">View</a>
                                        <a href="{{route('users.edit', $user->id)}}"
                                           class="btn btn-sm btn-outline-primary">Edit</a>
                                        <a href="{{route('users.confirm', $user->id)}}"
                                           class="btn btn-sm btn-outline-danger">Delete</a>
                                    </td>
                                </tr>
                            @empty
                                <td colspan="5" class="text-center">No Users Found! <a href="{{route('users.create')}}">Create
                                        New</a></td>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center">
                        {{$users->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
