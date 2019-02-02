<!DOCTYPE html>
<html>
<head>
	<title>INDEX PAGE</title>
</head>
<body>
	<a href="{{ url('/stuff/create') }}">Create New Data</a>
	<h1>Stuff Index</h1>
	<table border="1" width="700">
		<thead>
			<tr>
				<th>Name</th>
				<th>Desription</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($staffs as $key => $staff)
				<tr>
					<td>{{ $staff->name }}</td>
					<td>{{ $staff->description }}</td>
					<td>{{ $staff->status === 1 ? 'Available' : 'Not Available' }}</td>
					<td>
						<a href="{{ url('/stuff/' . $staff->id . '/edit') }}">Edit</a>
						<a href="{{ url('/stuff/' . $staff->id . '/show') }}">Detail</a>
						<form action="{{ url('/stuff/' . $staff->id) }}" method="POST">
							@csrf
							{{ method_field('DELETE') }}
							<button type="submit">Delete</button>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>