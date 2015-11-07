@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form method="POST" action="/auth/login">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email"  placeholder="Input email" value="{{old('email')}}" required>
                </div>
            
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" id="password"  placeholder="Input password" value="{{old('password')}}" required>
                </div>
            
                <div class="form-group">
                    <input type="checkbox" name="remember" checked=""> Remember Me
                </div>
            
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
            
            @include ('errors ')
        </div>
    </div>
@stop