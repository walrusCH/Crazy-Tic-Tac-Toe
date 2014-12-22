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
					<h1>Tic Tac Toe<small> By Gary</small></h1>
				</div>
			</div>
			<div class="row">
				<div class="row" style="margin-bottom: 10px">
					<div class="col-md-4 col-md-offset-3">
						<div class="input-group">
						  	<span class="input-group-addon">O({{{$user1Model->usr}}}) won</span>
						  	<input type="hidden" value = "{{{$user1Model->usr}}}" id="user1">
						  	<input type="text" class="form-control" disabled value="{{$user1Model->score}}" style="text-align:center">
						  	<span class="input-group-addon">time(s)</span>
						</div>
					</div>	
				</div>
				<div class="row">
					<div class="col-md-4 col-md-offset-3">
						<div class="input-group">
						  	<span class="input-group-addon">X({{{$user2Model->usr}}}) won</span>
						  	<input type="hidden" value = "{{{$user2Model->usr}}}" id="user2">
						  	<input type="text" class="form-control" disabled value="{{{$user2Model->score}}}" style="text-align:center">
						  	<span class="input-group-addon">time(s)</span>
						</div>
					</div>	
				</div>
			</div>
			<div class="row" id="bigGrid">
				<div class="row" style="margin-top:10px">
					<div class="col-md-3 outside-margin one">
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
					<div class="col-md-3 outside-margin two">
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
					<div class="col-md-3 outside-margin three">
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
					<div class="col-md-3 outside-margin four">
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
					<div class="col-md-3 outside-margin five">
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
					<div class="col-md-3 outside-margin six">
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
					<div class="col-md-3 outside-margin seven">
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
					<div class="col-md-3 outside-margin eight">
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
					<div class="col-md-3 outside-margin nine">
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
			</div>
			<div class="row">
				<div class="col-md-4 col-md-offset-3">
					<a href="#" id="reset" class="btn-success btn" style="width:100%" >Restart</a>	
				</div>
			</div>
		</div>
	</div>
	

	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			var isWin = function(flag, parent, isOutside)
			{
				return isOutside? 
					(parent.find(".one").hasClass(flag) && parent.find(".two").hasClass(flag) && parent.find(".three").hasClass(flag) 
			  		|| parent.find(".four").hasClass(flag) && parent.find(".five").hasClass(flag) && parent.find(".six").hasClass(flag) 
			  		|| parent.find(".seven").hasClass(flag) && parent.find(".eight").hasClass(flag) && parent.find(".nine").hasClass(flag) 
			  		|| parent.find(".one").hasClass(flag) && parent.find(".four").hasClass(flag) && parent.find(".seven").hasClass(flag) 
			  		|| parent.find(".two").hasClass(flag) && parent.find(".five").hasClass(flag) && parent.find(".eight").hasClass(flag) 
			  		|| parent.find(".three").hasClass(flag) && parent.find(".six").hasClass(flag) && parent.find(".nine").hasClass(flag) 
			  		|| parent.find(".one").hasClass(flag) && parent.find(".five").hasClass(flag) && parent.find(".nine").hasClass(flag) 
			  		|| parent.find(".three").hasClass(flag) && parent.find(".five").hasClass(flag) && parent.find(".seven").hasClass(flag))
				: (parent.find("#one").hasClass(flag) && parent.find("#two").hasClass(flag) && parent.find("#three").hasClass(flag)
			  		|| parent.find("#four").hasClass(flag) && parent.find("#five").hasClass(flag) && parent.find("#six").hasClass(flag) 
			  		|| parent.find("#seven").hasClass(flag) && parent.find("#eight").hasClass(flag) && parent.find("#nine").hasClass(flag) 
			  		|| parent.find("#one").hasClass(flag) && parent.find("#four").hasClass(flag) && parent.find("#seven").hasClass(flag) 
			  		|| parent.find("#two").hasClass(flag) && parent.find("#five").hasClass(flag) && parent.find("#eight").hasClass(flag) 
			  		|| parent.find("#three").hasClass(flag) && parent.find("#six").hasClass(flag) && parent.find("#nine").hasClass(flag) 
			  		|| parent.find("#one").hasClass(flag) && parent.find("#five").hasClass(flag) && parent.find("#nine").hasClass(flag) 
			  		|| parent.find("#three").hasClass(flag) && parent.find("#five").hasClass(flag) && parent.find("#seven").hasClass(flag));
			}

			var postWinner = function(winner)
			{
				$.ajax({
					type: 'POST',
					url:'/foo/winner',
					data: {
						'winner' : winner
					},
					success: function(reponse){
						alert('winner ' + winner + ' already posted');
					}
				});
			}

			var x = "x"
			var o = "o"
			var count = 0;
			var outsideCount = 0;
			var o_win = 0;
			var x_win = 0;
			var $outSide = $('#bigGrid');
			var user1 = $('#user1').val();
			var user2 = $('#user2').val();
			$('#game li').click(function(){

				if ($(this).hasClass('disable'))
			  	{
			   		alert('Already selected');
				}

				$grid = $(this).parent();

				//this is O turn
				if (count%2 == 0)
			  	{
					count++
				 	$(this).text(o)
			      	$(this).addClass('disable o btn-primary')
			  	}

			  	else
			  	{
			  		count++
			    	$(this).text(x)
			    	$(this).addClass('disable x btn-info')
			  	}

			  	if (isWin('o', $grid, false))
			   	{
					alert('O has won the game. Start a new game');
					$(this).parent().parent().addClass('o');
					count = (Math.floor(count/9) + 1)*9;
					console.log("o win count :" + count);
					outsideCount++;
					//disable rest
					$grid.children().not('.disable').attr('disabled', true);
			   	}
			  	else if (isWin('x', $grid, false))
			  	{
			   		alert('X wins has won the game. Start a new game');
			   		count = (Math.floor(count/9) + 1)*9;
			   		console.log("x wins, count is "+count);
					$(this).parent().parent().addClass('x');
					$grid.children().not('.disable').attr('disabled', true);
					console.log("X win count :" + count);
					outsideCount++;
			  	}
				else if (count % 9 == 0)
			  	{
					alert('Its a tie.');
					outsideCount++;
			  	}

			  	//check out side 
			  	if (isWin('o', $outSide, true))
			  	{
			  		alert('MotherFucker !!! O has won the big game. Start a new game');
			  		$outSide.find('li').not('.disable').attr('disabled', true);
			  		postWinner(user1);
			  	}

			  	else if (isWin('x', $outSide, true))
			  	{
			  		alert('MotherFucker X has won big the game. Start a new game');
			  		$outSide.find('li').not('.disable').attr('disabled', true);
			  		postWinner(user2);
			  	}

			  	if(outsideCount == 9)
			  	{
			  		alert('MonterFucker Its a tie. Game Over');
			  	}

			});
		    $("#reset").click(function () {
			    $("#game li").text("+");
				$("#game li").removeClass('disable')
				$("#game li").removeClass('o')
				$("#game li").removeClass('x')
				$("#game li").removeClass('btn-primary')
				$("#game li").removeClass('btn-info')
				$("#game li").attr('disabled', false);
				count = 0
			});
		});
	</script>
</body>
</html>