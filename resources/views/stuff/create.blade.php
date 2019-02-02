<!DOCTYPE html>
<html>
<head>
	<title>INDEX PAGE</title>
</head>
<body>
	<h1>Create New Stuff</h1>
	<a href="{{ url('/stuff') }}">Back To Index</a>
	<form action="{{ url('/stuff') }}" method="POST">
		@csrf
		{{ method_field('POST') }}
		<p>
			<input type="text" name="name" placeholder="Name" required>
		</p>
		<p>
			<textarea name="description" placeholder="Description" required></textarea>
		</p>
		<p>
			<select name="status">
				<option value="1">Available</option>
				<option value="2">Not Available</option>
			</select>
		</p>
		<button type="submit">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html>