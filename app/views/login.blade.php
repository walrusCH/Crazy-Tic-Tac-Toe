<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crazy</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/arragement.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="page-header">
				<h1>Tic Tac Toe Login</h1>
			</div>
		</div>
		<div class="row">

			{{ Form::open(array('url' => 'foo')) }}
		  		<div class="form-group">
			    	<label for="userName1">User Name 1</label>
				    <input type="text" class="form-control" id="userName1" name="userName1" placeholder="Enter User name 1">
					<label for="userName2">User Name 2</label>
				    <input type="text" class="form-control" id="userName2" name="userName2" placeholder="Enter User name 2">
			  	</div>
		  		<button type="submit" class="btn btn-default">Submit</button>
			{{ Form::close() }}
		</div>
	</div>
	
</body>
</html>
