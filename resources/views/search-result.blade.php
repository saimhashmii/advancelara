<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Algolio Search</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="d-flex justify-content-center mt-3">
				<div class="col-lg-4">
					<h2>Algolio Search</h2>
					
					@foreach($users as $user)
						{{$user->name}}<br>
					@endforeach
					<div class="d-flex mt-2">
						<div class="form-group">
							<a class="btn btn-success" href="{{route('search.index')}}">Back</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<script>
	{{-- FOR INVISIBLE CAPTCHA --}}
	$(document).ready(function(){
		// $('#form').submit();
	});
</script>
</body>
</html>