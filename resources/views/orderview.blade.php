<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Employee Login</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container-fixed">
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
				<div class="col-lg-6 ">
					<div class="card mt-5 shadow-lg">
						@if(Session::has('success'))
							<div class="alert alert-success" role= "alert">
								<strong>Successfull:</strong>
								{{ Session::get('success') }}
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
					 			</button>
							</div>
						@endif
						<div class="card-header bg-white border-0">
							<h5 class="text-dark">Take Order</h5>
						</div>
						<div class="card-body">
							<h4 class="text-center">
								<a href="order" class="text-white btn btn-info col-5 btn-lg font-weight-bold">
								AddOrder
							</a></h4>
						</div>
					</div>
				</div>
				<div class="col-lg-3 mt-5">
					<div class="card shadow-lg">
						<div class="card-body m-4">
							<a href="pie.php" class="btn btn-info btn-lg btn-block font-weight-bold">Report</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>