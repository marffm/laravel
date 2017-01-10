@extends('layouts.master') @section('title') Welcome @endsection @section('content') @if(count($errors) > 0)
<div class="row">
    <div class="col-sm-6">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif

<div class="row">
    <div class="col-sm-6">
        <h3>Sing Up</h3>
        <form action="{{route('signup')}}" method="post">
            <input type="hidden" name="_token" value="{{Session::token()}}">
            <div class="form-group">
                <label for="email">Your E-mail.</label>
                <input type="text" name="email" id="email" value="{{Request::old('email')}}" class="form-control {{ $errors->has('email') ? 'has-error' : '' }}">
            </div>
            <div class="form-group">
                <label for="first-name">Your First Name.</label>
                <input type="text" name="first-name" id="first-name" value="{{Request::old('first-name')}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Insert your Password.</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <div class="col-sm-6">
        <h3>Sign in</h3>
        <form action="{{route('signin')}}" method="post">
            <input type="hidden" name="_token" value="{{Session::token()}}">
            <div class="form-group">
                <label for="email">Your E-mail.</label>
                <input type="text" name="email" id="email" value="{{Request::old('email')}}" class="form-control" placeholder="Your Email">
            </div>
            <div class="form-group">
                <label for="email">Insert your Password.</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


@endsection