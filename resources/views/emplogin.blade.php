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
		<nav class="navbar navbar-expand-lg shadow-lg bg-info  sticky-top">
			<div class="navbar-brand">
				<h2 class="text-white pl-5">ABC Employee Here ..ITalent India</h2>
			</div>
			
		</nav>
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="card mt-5 shadow-lg">
					<div class="card-header bg-white border-0">
						<h4 class="text-dark">Login</h4>
					</div>
					<div class="card-body">
						<form action="match" method="post" class="font-weight-bold">
							{{csrf_field()}}
							<label for="name">UserName:</label>
							<div class="form-group">
								<input type="text" name="name" class="form-control" placeholder="Enter Name...">
							</div>
							<label for="name">Password:</label>
							<div class="form-group">
								<input type="text" name="pass" class="form-control" placeholder="Enter password...">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-info font-weight-bold btn-block">Login</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>