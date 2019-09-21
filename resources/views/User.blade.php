<html>
<head>
<title>User Registration</title>	
</head>
<body>
	<form action="/register" method="POST">
		@csrf
		<label>Name</label>
		<input type="text" name="name">
		
		<label>Email</label>
		<input type="email" name="email">

		<label>Password</label>
		<input type="password" name="password">

		<input type="submit" value="Register">
	</form>
</body>
</html>