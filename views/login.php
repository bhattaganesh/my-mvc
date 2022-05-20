<form class="login-form p-4 col-6 offset-3" method="post">
	<h2 class="text-center text-bold p-2">Login Form</h2>
	<div class="mb-3">
		<label for="email" class="form-label">Email address</label>
		<input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
	</div>
	<div class="mb-3">
		<label for="password" class="form-label">Password</label>
		<input type="password" name="password" class="form-control" id="password">
	</div>
	<div class="mb-3 form-check">
		<input type="checkbox" class="form-check-input" id="rememberMe">
		<label class="form-check-label" name="remember_me" for="rememberMe">Remember Me</label>
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>

	<div class="container mt-2">
		<span class="text text-center text-large">Don't have account? <a class="btn btn-link" href="/register">Register here</a></span>
	</div>
</form>
