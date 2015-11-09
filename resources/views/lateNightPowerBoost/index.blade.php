@extends('layouts.master')


@section('title')
    Late Night Power Boost
@stop



@section('head')

@stop

@section('content')
	<h1 style="font-family: Cabin Sketch; margin: -10px 0px 0px 0px;">Late Night Power Boost</h1>

	<h1 style="font-family: Cabin Sketch;">
		This should make you smile. Late at night when all has gone South, you can at least "Smile and Laugh a Little."
	</h1>
	<img src="img/1.png">
	<form style="text-align: center;" method="Post" action="/latenightpowerboost">
		<input type='hidden' name='_token' value='{{ csrf_token() }}'>
		<h1 style="display: inline; font-family: Cabin Sketch;">If you need another Power Boost, press 'Generate.'</h1>
		<input type="submit" value="" style="display: inline; height: 46px; width: 135px; background:url(img/generatebutton.png);"></form>
	</form>
@stop


@section('body')

@stop