@extends('layouts.app')

@section('content')
    <div class="custom-container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card text-center">
                    <div class="card-header">Dashboard
                        <a href="{{route('posts.create')}}" class="float-right btn btn-primary">New +</a>
                    </div>
                    <div class="card-body">
                        @include('layouts.partials.message')
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <td>ID</td>
                                <td>Name</td>
                                <td>Description</td>
                                <td>Category</td>
                                <td>Tags</td>
                                <td>Posted By</td>
                                <td>Posted On</td>
                                <td>Actions</td>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($posts as $post)
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td>{{str_limit($post->title, 20, '...')}}</td>
                                    <td>{{str_limit($post->body, 30, '...')}}</td>
                                    <td>{{'test'}}</td>
                                    <td>
                                        @forelse($post->tags as $tag)
                                            {{$tag->name}}
                                        @empty
                                            -
                                        @endforelse
                                    </td>
                                    <td><a href="{{route('users.show', $post->user->id)}}">{{$post->user->name}}</a>
                                    <td><a href="#">{{date_format(new DateTime($post->created_at), 'M d Y')}}</a></td>
                                    </td>
                                    <td>
                                        <a href="{{route('posts.show', $post->id)}}"
                                           class="btn btn-sm btn-outline-primary">View</a>
                                        <a href="{{route('posts.edit', $post->id)}}"
                                           class="btn btn-sm btn-outline-primary">Edit</a>
                                        <a href="{{route('posts.confirm', $post->id)}}"
                                           class="btn btn-sm btn-outline-danger">Delete</a>
                                    </td>
                                </tr>
                            @empty
                                <td colspan="8" class="text-center">No Post Found! <a href="{{route('posts.create')}}">Create
                                        New</a></td>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center">
                        {{$posts->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
