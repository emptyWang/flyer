@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>Register</h1>

            <hr>

            <form method="POST" action="/auth/register">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" id="name"  placeholder="Input name" value="{{old('name')}}" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" id="email"  placeholder="Input email" value="{{old('email')}}" required>
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" id="password"  placeholder="Input password" value="{{old('password')}}" required>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirm Password:</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"  placeholder="Input password_confirmation" value="{{old('password_confirmation')}}" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
            
            @include ('errors ')
        </div>
    </div>
@stop