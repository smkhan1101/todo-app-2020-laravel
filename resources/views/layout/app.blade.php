

<!DOCTYPE html>

<html>

<head>
	<title>
		@yield('title')	
	</title>
	
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  		<a class="navbar-brand" href="/">TODOS APP</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" 		aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  		
  		<div class="collapse navbar-collapse" id="navbarNav">
    		<ul class="navbar-nav">
      			<li class="nav-item active">
        			<a class="nav-link" href="/todos">TODO <span class="sr-only">(current)</span></a>
      			</li>
      			<li class="nav-item active">
        			<a class="nav-link" href="/nav-todo">create Todo <span class="sr-only">(current)</span></a>
      			</li>
    
    
    		</ul>
  		</div>
	</nav>

	<div class="container">

		@if(session()->has('success'))
			<div class="alert alert-success">
				{{session()->get('success')}}

			</div>
		@endif
		
		@yield('content')

	</div>

	
</body>
</html>