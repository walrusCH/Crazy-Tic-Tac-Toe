<!doctype html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/arragement.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="row">
				<div class="page-header">
					<h1>Tic Tac Toe<small> By xxx</small></h1>
				</div>
			</div>
			<div class="row">
				<div class="row" style="margin-bottom: 10px">
					<div class="col-md-4 col-md-offset-3">
						<div class="input-group">
						  	<span class="input-group-addon">O({{{$user1Model->usr}}}) won</span>
						  	<input type="text" class="form-control" disabled value="{{$user1Model->score}}" style="text-align:center">
						  	<span class="input-group-addon">time(s)</span>
						</div>
					</div>	
				</div>
				<div class="row">
					<div class="col-md-4 col-md-offset-3">
						<div class="input-group">
						  	<span class="input-group-addon">X({{{$user2Model->usr}}}) won</span>
						  	<input type="text" class="form-control" disabled value="{{{$user2Model->score}}}" style="text-align:center">
						  	<span class="input-group-addon">time(s)</span>
						</div>
					</div>	
				</div>
			</div>
			<div class="row" style="margin-top:10px">
				<div class="col-md-3 outside-margin">
					<ul class="row" id="game">
				      	<li id="one" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="two" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="three" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="four" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="five" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="six" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="seven" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="eight" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="nine" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
				    </ul>
				</div>
				<div class="col-md-3 outside-margin">
					<ul class="row" id="game">
				      	<li id="one" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="two" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="three" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="four" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="five" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="six" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="seven" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="eight" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="nine" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
				    </ul>
				</div>
				<div class="col-md-3 outside-margin">
					<ul class="row" id="game">
				      	<li id="one" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="two" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="three" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="four" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="five" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="six" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="seven" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="eight" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="nine" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
				    </ul>
				</div>
			</div>
			<div class="row" style="margin-top:10px">
				<div class="col-md-3 outside-margin">
					<ul class="row" id="game">
				      	<li id="one" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="two" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="three" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="four" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="five" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="six" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="seven" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="eight" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="nine" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
				    </ul>
				</div>
				<div class="col-md-3 outside-margin">
					<ul class="row" id="game">
				      	<li id="one" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="two" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="three" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="four" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="five" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="six" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="seven" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="eight" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="nine" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
				    </ul>
				</div>
				<div class="col-md-3 outside-margin">
					<ul class="row" id="game">
				      	<li id="one" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="two" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="three" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="four" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="five" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="six" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="seven" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="eight" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="nine" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
				    </ul>
				</div>
			</div>
			<div class="row" style="margin-top:10px">
				<div class="col-md-3 outside-margin">
					<ul class="row" id="game">
				      	<li id="one" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="two" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="three" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="four" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="five" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="six" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="seven" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="eight" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="nine" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
				    </ul>
				</div>
				<div class="col-md-3 outside-margin">
					<ul class="row" id="game">
				      	<li id="one" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="two" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="three" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="four" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="five" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="six" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="seven" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="eight" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="nine" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
				    </ul>
				</div>
				<div class="col-md-3 outside-margin">
					<ul class="row" id="game">
				      	<li id="one" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="two" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="three" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="four" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="five" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="six" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="seven" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="eight" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
					    <li id="nine" type="button" class="btn btn-default col-md-3 inner-margin">+</li>
				    </ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-md-offset-3">
					<a href="#" id="reset" class="btn-success btn" style="width:100%" >Restart</a>	
				</div>
			</div>
		</div>
	</div>
</body>
</html>