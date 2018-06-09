@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Dashboard
                        <a href="{{route('tags.create')}}" class="float-right btn btn-primary">New +</a>
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
                            @forelse($tags as $tag)
                                <tr>
                                    <td>{{$tag->id}}</td>
                                    <td>{{$tag->name}}</td>
                                    <td>{{$tag->description}}</td>
                                    <td>
                                        <a href="{{route('tags.show', $tag->id)}}"
                                           class="btn btn-sm btn-outline-primary">View</a>
                                        <a href="{{route('tags.edit', $tag->id)}}"
                                           class="btn btn-sm btn-outline-primary">Edit</a>
                                        <a href="{{route('tags.confirm', $tag->id)}}"
                                           class="btn btn-sm btn-outline-danger">Delete</a>
                                    </td>
                                </tr>
                            @empty
                                <td colspan="5" class="text-center">No Tags Found! <a href="{{route('tags.create')}}">Create
                                        New</a></td>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center">
                        {{$tags->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
