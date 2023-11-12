<!DOCTYPE html>
<html lang="en">

<he <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Website Monitoring Mikrotik">
    <meta name="Infidel - AqilSpc" content="Website Monitoring Mikrotik">
    <meta name="keywords" content="Website Monitoring Mikrotik">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="src/img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title>Sign In | Website Monitoring Mikrotik</title>

    <link href="src/css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Welcome back!</h1>
							<p class="lead">
								Sign in to your account to continue
							</p>
						</div>
						
						<div class="card">
							<div class="card-body">
								<div class="m-sm-3">
									<form action="{{url('login_user')}}" method="POST">
										@csrf
										<div class="mb-3">
											<label class="form-label">Username</label>
											<input required class="form-control form-control-lg" type="text" name="username" placeholder="Enter your username" autocomplete="off"/>
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input required class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" />
										</div>
										<div class="d-grid gap-2 mt-3">
											<button type="submit" class="btn btn-lg btn-primary">Sign in</button>
										</div>
										@if($message=Session::get('error'))
									      <div class="alert alert-danger" role="alert" align="center" style="color: red;">
									          <div class="alert-text">{{ucwords($message)}}</div>
									      </div>
									    @endif
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
</body>

<script src="js/app.js"></script>

</html>