<form class="regiter-form p-4 col-6 offset-3" method="post">
	<h2 class="text-center text-bold p-2">Registration Form</h2>
	<div class="mb-3">
		<label for="name" class="form-label">Full Name</label>
		<input type="email" name="name" class="form-control" id="name" aria-describedby="emailHelp">
	</div>
	<div class="mb-3">
		<label for="email" class="form-label">Email address</label>
		<input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
	</div>
	<div class="mb-3">
		<label for="password" class="form-label">Password</label>
		<input type="password" name="password" class="form-control" id="password">
	</div>
	<div class="mb-3">
		<label for="password2" class="form-label">Confirm Password</label>
		<input type="password" name="password2" class="form-control" id="password2">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
	<div class="container mt-2">
		<span class="text text-center text-large">Already have account? <a class="btn btn-link" href="/login">Login here</a></span>
	</div>
</form>
