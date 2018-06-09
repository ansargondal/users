@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Category Information</h3>
                </div>
                <div class="card-body">
                    <strong>Name: </strong>{{$category->name}}<br>
                    <strong>Description: </strong>{{$category->description}}<br>
                </div>
                <div class="card-footer">
                    <a href="{{route('categories.edit', $category->id)}}" class="btn btn-outline-primary">Edit</a>
                    <a href="{{route('categories.confirm', $category->id)}}" class="btn btn-outline-danger">Delete</a>
                    <a href="{{route('categories.index')}}" class="btn btn-outline-success">Back</a>
                </div>
            </div>
        </div>
    </div>
@stop