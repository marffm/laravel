@extends('layouts.master')

@section('title')
    Welcome
@endsection

@section('content')

<div class="row">
    <div class="col-sm-6">
    <h3>Sing Up</h3>
    <form action="{{route('signup')}}" method="post">
        <input type="hidden" name="_token" value="{{Session::token()}}">
        <div class="form-group">
            <label for="email">Your E-mail.</label>
            <input type="text" name="email" id="email" value="Your E-mail" class="form-control" >
        </div>
        <div class="form-group">
            <label for="first-name">Your First Name.</label>
            <input type="text" name="first-name" id="first-name" value="Your Name" class="form-control" >
        </div>
        <div class="form-group">
            <label for="email">Insert your Password.</label>
            <input type="password" name="password" id="password" class="form-control" >
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
            <input type="text" name="email" id="email" value="Your E-mail" class="form-control" >
        </div>
        <div class="form-group">
            <label for="email">Insert your Password.</label>
            <input type="password" name="password" id="password" class="form-control" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</div>


@endsection