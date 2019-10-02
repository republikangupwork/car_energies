<!DOCTYPE html>
<html>
<head>
	<title>CE- Car Energies</title>
	<link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}">
	<style>
		#content {
		  	height: 100vh;
		  	min-height: 500px;
		  	background-image: url({{ asset('images/sample_1/hero1.jpg') }});
		  	background-size: cover;
		  	background-position: center;
		 	background-repeat: no-repeat;
		}
	</style>
</head>
<body>
	<div id="content" class="">
		<div class="container-fluid h-100">
		    <div class="row justify-content-center align-items-center h-100">
		        <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
		        	<div class="card text-success">
		        		<div class="card-body">
        					<img src="{{ asset('images/sample_1/logo/logo.png') }}" width="100%">
        					<hr class="bg-warning">
        					@if ($message = Session::get('message'))
								<div class="alert alert-danger alert-block text-dark">
									<button type="button" class="close" data-dismiss="alert">×</button>	
							        <li><strong>{{ $message }}</strong></li>
								</div>
							@endif
				            <form role="form" method="POST" action="{{ url('/admin-page/login') }}">
				            	{{ csrf_field() }}
				                <div class="form-group">
				                	<label>Email : </label>
				                    <input class="form-control form-control-md" name="email" placeholder="Enter Email" type="text" required="">
				                </div>
				                <div class="form-group">
				                	<label>Password : </label>
				                    <input class="form-control form-control-md" name="password" placeholder="Enter Password" type="password" required="">
				                </div>
				                <div class="form-group">
				                    <button type="submit" class="btn btn-success btn-md btn-block">Log In</button>
				                </div>
				            </form>
			            </div>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
	<script src="{{ asset('admin/assets/js/jquery.js') }}"></script>
	<script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>

	<script>
		$('.alert').alert()
	</script>
</body>
</html>