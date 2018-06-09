@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <form action="{{route('users.store')}}" method="post">
                    <div class="card-header">
                        <h4 class="card-title">NEW USER</h4>
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
                            <label for="email">Email</label>
                            <input type="text" class="form-control  {{$errors->has('email')? 'is-invalid' : ''}}"
                                   name="email" id="email" value="{{old('email')}}">
                            @if($errors->has('email'))
                                <span class="invalid-feedback">{{$errors->first('email')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="role">User Role</label>
                            <select name="role" id="role"
                                    class="form-control {{$errors->has('role')? 'is-invalid': '' }}">
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('role'))
                                <span class="invalid-feedback">{{$errors->first('role')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control {{$errors->has('password')? 'is-invalid' : ''}} "
                                   name="password" id="password">
                            @if($errors->has('password'))
                                <span class="invalid-feedback">{{$errors->first('password')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password">Confirm Password</label>
                            <input type="password"
                                   class="form-control  {{$errors->has('confirm_password')? 'is-invalid' : ''}}"
                                   name="password_confirmation"
                                   id="password">
                            @if($errors->has('confirm_password'))
                                <span class="invalid-feedback">{{$errors->first('confirm_password')}}</span>
                            @endif
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary">Create User</button>
                    </div>
                    {{csrf_field()}}
                </form>
            </div>{{--!card--}}

        </div>
    </div>
@stop