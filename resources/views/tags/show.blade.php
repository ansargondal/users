@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tag Information</h3>
                </div>
                <div class="card-body">
                    <strong>Name: </strong>{{$tag->name}}<br>
                    <strong>Description: </strong>{{$tag->description}}<br>
                </div>
                <div class="card-footer">
                    <a href="{{route('tags.edit', $tag->id)}}" class="btn btn-outline-primary">Edit</a>
                    <a href="{{route('tags.confirm', $tag->id)}}" class="btn btn-outline-danger">Delete</a>
                    <a href="{{route('tags.index')}}" class="btn btn-outline-success">Back</a>
                </div>
            </div>
        </div>
    </div>
@stop