<!doctype html>
<html lang="en">
  <head>
  	<title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="/img/burger.png" />
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">

	</head>

    <body>
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-10">
                        <div class="wrap d-md-flex">
                            <div class="img" style="background-image: url('/img/register.png');"></div>
                            <div class="login-wrap p-4 p-md-5">
                                <div class="d-flex">
                                    <div class="w-100">
                                        <h3 class="mb-4">Sign In</h3>
                                    </div>
                                </div>
                                <form action="" method="POST">
                                <?php if(session()->getFlashdata('error')){?>
                                    <div class="alert alert-danger">
                                        <?php echo session()->getFlashdata('error') ?>
                                    </div>
                                <?php } ?>
                                    <div class="form-group mb-3">
                                        <label for="name" class="label">Username</label>
                                        <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="pw" class="label">Password</label>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="form-control btn btn-primary rounded" value="Sign In" name="login">
                                    </div>
                                </form>
                                <p class="text-center">Need an account ? <a href="<?= site_url('/register'); ?>" data-toggle="tab" onclick="goto('register')">Sign Up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>