<!DOCTYPE html>
<html>
<head>
	<title>INDEX PAGE</title>
</head>
<body>
	<h1>Create New Stuff</h1>
	<a href="{{ url('/stuff') }}">Back To Index</a>
	<p>
		Name : {{ $stuff->name }}
	</p>
	<p>
		Name : {{ $stuff->description }}
	</p>
	<p>
		Status : {{ $stuff->status }}
	</p>
</body>
</html>