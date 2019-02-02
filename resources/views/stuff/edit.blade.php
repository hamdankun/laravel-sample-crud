<!DOCTYPE html>
<html>
<head>
	<title>INDEX PAGE</title>
</head>
<body>
	<h1>Update Stuff</h1>
	<a href="{{ url('/stuff') }}">Back To Index</a>
	<form action="{{ url('/stuff/' . $stuff->id) }}" method="POST">
		@csrf
		{{ method_field('PUT') }}
		<p>
			<input type="text" name="name" placeholder="Name" value="{{ $stuff->name }}" required>
		</p>
		<p>
			<textarea name="description" placeholder="Description" required>{{ $stuff->description }}</textarea>
		</p>
		<p>
			<select name="status">
				<option {{ $stuff->status === 1 ? 'selected' : '' }} value="1">Available</option>
				<option {{ $stuff->status === 2 ? 'selected' : '' }} value="2">Not Available</option>
			</select>
		</p>
		<button type="submit">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html>