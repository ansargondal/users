@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <form action="{{route('roles.store')}}" method="post">
                    <div class="card-header">
                        <h4 class="card-title">NEW ROLE</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control {{$errors->has('name')? 'is-invalid' : ''}}"
                                   name="name" id="name" value="{{old('name')}}">
                            @if($errors->has('name'))
                                <span class="invalid-feedback">{{$errors->first('name')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description"
                                      class="form-control  {{$errors->has('description')? 'is-invalid' : ''}}">{{old('description')}}</textarea>
                            @if($errors->has('description'))
                                <span class="invalid-feedback">{{$errors->first('description')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary">Create Role</button>
                    </div>
                    {{csrf_field()}}
                </form>
            </div>{{--!card--}}

        </div>
    </div>
@stop