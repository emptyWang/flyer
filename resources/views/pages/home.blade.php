@extends('layout')

@section('content')

	<div class="jumbotron">
		<h1>Project Flyer</h1>

		<p>
			老子道德经。大学之道，在明明德，在亲民，在止于至善。知止而后有定，定而后能静，静而后能安，安而后能虑，虑而后能得。物有本末，事有终始，知所先后，则近道矣。
		</p>

        @if ($signedIn)
            <a href="/flyers/create" class="btn btn-primary">Create a Flyer</a>
        @else
		    <a href="/auth/login" class="btn btn-primary">Signed In</a>
        @endif
        
	</div>

@stop
