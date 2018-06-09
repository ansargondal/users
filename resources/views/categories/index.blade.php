@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Dashboard
                        <a href="{{route('categories.create')}}" class="float-right btn btn-primary">New +</a>
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
                            @forelse($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->description}}</td>
                                    <td>
                                        <a href="{{route('categories.show', $category->id)}}"
                                           class="btn btn-sm btn-outline-primary">View</a>
                                        <a href="{{route('categories.edit', $category->id)}}"
                                           class="btn btn-sm btn-outline-primary">Edit</a>
                                        <a href="{{route('categories.confirm', $category->id)}}"
                                           class="btn btn-sm btn-outline-danger">Delete</a>
                                    </td>
                                </tr>
                            @empty
                                <td colspan="5" class="text-center">No Categories Found! <a
                                            href="{{route('categories.create')}}">Create
                                        New</a></td>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center">
                        {{$categories->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
