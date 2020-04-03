
@extends('layout.app')
	
<!-- section for title -->
	@section('title')

		Todos list

	@endsection


@section('content')
	
	<h1 class="text-center mt-5">Todos app</h1>
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card card-default">
					<div class="card-header">
						Todo
					</div>
					<div class="card-body">
						<ul class="list-group">
							@foreach($todos as $todo)
								<li class="list-group-item">
									{{$todo->name}}
									
									@if(!$todo->completed)
										<a href="/todos/{{$todo->id}}/complete" class="btn btn-warning sm float-right ml-2">complete</a>
									@endif

									<a href="/todos/{{$todo->id}}" class="btn btn-primary sm float-right">view</a>

								</li>


							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
		
	
@endsection
	
