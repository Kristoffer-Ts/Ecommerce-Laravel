<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
</head>
<body>
	<h1>This is Admin Page</h1>
	<p>Welcome to the admin page. This page is only accessible for authorized personnel.</p>
	<form action="{{route("manageuser")}}" method="">
		<button type="submit" class="btn btn-primary">Manage user</button>
	</form>
</body>
</html>