<!doctype html>
<html lang="en">
  <head>
  	<title><?= $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="/img/burger.png" />
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="/assets/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<!-- <h2 class="heading-section">Login #04</h2> -->
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(/img/register.png);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign Up</h3>
			      		</div>
			      	</div>
							<form action="/auth/register" class="singup-form" method="POST">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">First Name</label>
			      			<input type="text" class="form-control" name="firstname" id="firstname" placeholder="Firstname" required>
			      		</div>
                          <div class="form-group mb-3">
			      			<label class="label" for="name">Last Name</label>
			      			<input type="text" class="form-control" name="lastname" id="lastname" placeholder="Lastname">
			      		</div>
                          <div class="form-group mb-3">
			      			<label class="label" for="name">Username</label>
			      			<input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
			      		</div>
		            	<div class="form-group mb-3">
		            		<label class="label" for="password">Password</label>
		              		<input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
		            	</div>
						<div class="input-group mb-3">
							<select name="role" id="" hidden>
								<option value="user">User</option>
							</select>
						</div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign Up</button>
		            </div>
		          </form>
		          <p class="text-center">Have an account ? <a href="<?= site_url('/login'); ?>" data-toggle="tab" onclick="goto('login')">Sign In</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="/assets/js/jquery.min.js"></script>
  <script src="/assets/js/popper.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  <script src="/assets/js/main.js"></script>
  <script>
function goto($hashtag){
     document.location = "" + $hashtag;
}
  </script>
	</body>
</html>

