@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <form action="{{route('roles.update', $role->id)}}" method="post">
                    {{method_field('PUT')}}
                    <div class="card-header">
                        <h4 class="card-title">EDIT ROLE</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control {{$errors->has('name')? 'is-invalid' : ''}}"
                                   name="name" id="name" value="{{old('name')?: $role->name}}">
                            @if($errors->has('name'))
                                <span class="invalid-feedback">{{$errors->first('name')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description"
                                      class="form-control  {{$errors->has('description')? 'is-invalid' : ''}}">{{old('description')?: $role->description }}</textarea>
                            @if($errors->has('description'))
                                <span class="invalid-feedback">{{$errors->first('description')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary">Update Role</button>
                    </div>
                    {{csrf_field()}}
                </form>
            </div>{{--!card--}}

        </div>
    </div>
@stop