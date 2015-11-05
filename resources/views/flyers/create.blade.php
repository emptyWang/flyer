@extends('layout')

@section('content')

	<h1>Selling Your Home?</h1>

	<hr>

	<form action="/flyers" method="POST" role="form" enctype="multipart/form-data">
		@include('flyers.form')
	</form>

@stop