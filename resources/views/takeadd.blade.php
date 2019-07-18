<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Employee Login</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
		<style>
			input[type='text'],input[type='number']
			{
				font-weight: bold;
				font-size: 20px;
			}
			option{font-weight: bold;
				font-size: 20px;}
		</style>
		<script>
			$(document).ready(function()
				{
					$('#hide').hide();
			});
		</script>
	</head>
	<body >
		<div class="container-fixed" >
			<nav class="navbar navbar-expand-lg shadow-lg bg-info  sticky-top">
				<a class="navbar-brand text-white" href="#"><h2 class="pl-5">ABC Restaurant</h2></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto mr-5">
						<li class="nav-item text-right float-right">
							<h5 class="text-white">
							Welcome {{session()->get('userdata')}}
							</h5>
						</li>
					</ul>
					<h4>
					<a href="logout" class="btn btn-danger btn-sm">Logout</a>
					</h4>
				</div>
			</nav>
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="card mt-5 shadow-lg">
						<div class="card-header bg-white border-0">
							<h4 class="text-dark">Take Order</h4>
						</div>
						@if(Session::has('success'))
							<div class="alert alert-success" role= "alert">
								<strong>Successfull:</strong>
								{{ Session::get('success') }}
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
					 			</button>
							</div>
						@endif
						<div class="card-body">
							<form action="send" method="post">
								{{csrf_field()}}
									<input type="text" id="hide" hidden="hidden" value="{{session()->get('userdata')}}" name="name" class="form-control">
								<div class="form-group">
									<label for="" class="font-weight-bold">
									Select Item:</label>
									<div class="form-group">
										<select name="order" id="n1" class="form-control" required="required" title="Please fill the input">
											<option value="Tea">Tea</option>
											<option value="Coffee">Coffee</option>
											<option value="Samosa">Samosa</option>
											<option value="Cake">Cake</option>
										</select>
									</div>
									<label for="" class="font-weight-bold">Quantity:</label>
									<div class="form-group">
										<input type="number" id="n2" name="qty" class="form-control" placeholder="Quantity.." required="required" title="Please fill the input">
									</div>
									<label for="" class="font-weight-bold">Total Amount:</label>
									<div class="form-group">
										<input type="text"  id="n3" name="amt" class="form-control" placeholder="Amount..">
									</div>
								</div>
								<div class="form-group text-center font-weight-bold">
									<button type="submit" class="btn btn-info col-4 font-weight-bold btn-lg">AddOrder</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card shadow-lg mt-5">
						<div class="card-header bg-info">
							<h4 class="text-white font-weight-bold ml-2">Menu  :</h4>
						</div>
						<div class="card-body font-weight-bold">
							<h4 class="font-weight-bold ml-1">Price :-</h4>
							<ul class="list-unstyled ml-4">
								<li>Tea 	: Rs.10</li>
								<li>Coffee  : Rs.10</li>
								<li>Samosa 	: Rs:15</li>
								<li>Cake  : Rs.15</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
		$(document).ready(function() {
			$('#n1').keyup(function() {
				user_check();
			});
			$('#n2').keyup(function() {
				user_check();
			});
			function user_check(){
				var item=$('#n1').val();
				var qty=$('#n2').val();
				
				if (item=='Tea') {
					var amt=10*qty;
					$('#n3').val(amt);
				}
				else if (item=='Coffee') {
					var amt=10*qty;
					$('#n3').val(amt);
				}
				else if (item=='Samosa') {
					var amt=15*qty;
					$('#n3').val(amt);
				}
				else if (item=='Cake') {
					var amt=15*qty;
					$('#n3').val(amt);
				}
			}
		});
		</script>
	</body>
</html>s