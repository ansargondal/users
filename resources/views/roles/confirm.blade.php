@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <form action="{{route('roles.destroy', request()->segment(3))}}" method="post">
                    {{method_field('DELETE')}}
                    <div class="card-header bg-danger text-white">
                        CONFIRM DELETE
                    </div>
                    <div class="card-body">
                        Do you really want to delete this role?
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-danger">Delete</button>
                        <a href="{{route('users.index')}}" class="btn btn-success">Cancel</a>
                    </div>
                    {{csrf_field()}}
                </form>
            </div>{{--!card--}}
        </div>
    </div>
@endsection