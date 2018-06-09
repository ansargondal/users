@extends('layouts.app')

@section('content')
    <div class="row">
        @forelse($posts as $post)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">  {{$post->title}}</div>
                    <div class="card-body">   {{$post->body}}</div>
                    <div class="card-footer"> Posted by: {{$post->user->name}}</div>
                    @can('edit', $post)
                        <div class="card-footer"><a href="#">Edit Post</a></div>
                    @endcan
                </div>
            </div>
        @empty
            <h3>No Posts found!</h3>
        @endforelse
    </div>
@stop