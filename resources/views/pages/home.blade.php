@extends('layout')

@section('content')

	<div class="jumbotron">
		<h1>Project Flyer</h1>

		<p>
			Use this document as a way to quickly start any new project.All you get is this text and a mostly barebones HTML document.
		</p>

        @if ($signedIn)
            <a href="/flyers/create" class="btn btn-primary">Create a Flyer</a>
        @else
		    <a href="/auth/login" class="btn btn-primary">Signed In</a>
        @endif
        
	</div>

@stop