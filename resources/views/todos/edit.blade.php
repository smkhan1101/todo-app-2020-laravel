@extends('layout.app')

@section('content')
	
	<h1 class="text-center mt-5">Edit Todo</h1>
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card card-default">
				<div class="card-header">
					create todo
				</div>
				<div class="card-body">
					@if($errors->any())
						<div class="alert alert-danger">
							<ul class="list-group">
								@foreach($errors->all() as $error)
									<li class="list-group-item">
										{{$error}}
									</li>
								@endforeach
							</ul>
						</div>

					@endif
					<form action="/todos/{{$todo->id}}/todo-update" method="post">
						@csrf
						<div class="form-group">

							<input type="text" class="form-control" name="name" placeholder="name" value="{{$todo->name}}">
						</div>
						<div class="form-group">
							<textarea class="form-control" name="description" placeholder="description" cols="10" rows="5">{{$todo->description}}</textarea>
						</div>
						<div class="text-center">
							<button type="submit" class="btn btn-success">update todo</button>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
	
	
@endsection