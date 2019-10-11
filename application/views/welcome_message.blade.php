@extends('layouts.main') 
@section('content')
<div id="container" class="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="app">
		<div class="row">
			<div class="col-sm-3">
				<h1>Firstname : @{{firstname}}</h1>
			</div>
			<div class="mx-2"></div>
			<div class="col-sm-3">
				<h1>Lastname : @{{lastname}}</h1>	
			</div>	
		</div>
	</div>

	<div class="fas fa-user-plus">
		{{$name}}
	</div>
</div>

@endsection