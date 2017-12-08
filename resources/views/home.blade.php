@extends('layout.index')
@section('title')


LockGh | Home
@endsection

@section('content')

	


	<div class="container">
		<div class="container-fluid" id="header">
			<nav class="navbar navbar-inverse">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              			<span class="sr-only">Toggle navigation</span>
              			<span class="icon-bar"></span>
              			<span class="icon-bar"></span>
              			<span class="icon-bar"></span>
            		</button>
					<a href="{{ route('home') }}" class="navbar-brand">LOCKGH&nbsp;<img src="img/lock.png"></a>
				</div>
				<div id="navbar" class="navbar-collapse collapse" aria-expanded="false">
					<ul class="nav navbar-nav">
						<li><a href="{{ route('home') }}">Home</a></li>
					</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><input class="form-control" type="search" name="search" placeholder="Search..."></li>
					<li><a href="{{ route('login') }}">Login</a></li>
				</ul>							
				</div>				
			</nav>
		</div>

		@foreach($events->chunk(4) as $eventchunks)
		<div class="row">
			@foreach($eventchunks as $event)
			<div class="col-sm-6 col-md-4">
			<ul class="thumbnails">
				<li><a href="#" data-toggle="modal" data-target="#eventModal1"><img src="{{$event->flier_image}}" class="img-thumbnail"><span><em>{{$event->event_name}}</em></span></a></li>
				
			</ul>
		</div>
		@endforeach
		</div>
		@include('include.modal')

        @endforeach
		

		<div class="row">
			<footer>
				<p>&copy;2017&nbsp;LockGh | Privacy | All rights reserved</p>
			</footer>
		</div>
		<!--Modal-->
		
