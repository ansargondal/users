@if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        {{session()->get('message')}}
    </div>
@endif