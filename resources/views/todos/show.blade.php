	@extends('layout.app')
	
	<!-- section for title -->
	@section('title')

		singal todo {{$todo->name}}

	@endsection

	@section('content')
		<h1 class="text-center mt-5">{{$todo->name}}</h1>
		<div class="container">
		<div class="row justify-content-center" >
			<div class="col-md-8">
				<div class="card card-default">
					<div class="card-header">
						Detail
					</div>
					<div class="card-body">
						{{$todo->description}}
					</div>

				</div>
				<a href="/todos/{{$todo->id}}/edit" class="btn btn-info  my-2">edit</a>
				<a href="/todos/{{$todo->id}}/delete" class="btn btn-danger  my-2">delete</a>
			</div>
		</div>
		</div>

	@endsection
