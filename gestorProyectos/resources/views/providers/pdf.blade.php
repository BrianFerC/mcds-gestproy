<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PDF All providers</title>
</head>
<style>
	table {
		border: 1px solid #aaa;
		border-collapse: collapse;
	}
	table th, table td {
		font-family: sans-serif;
		font-size: 12px;
		border: 1px solid #ccc;
		padding: 4px;
	}
	table tr:nth-child(odd) {
		background-color: #eee;
	}
	table th {
		background-color: #666;
		color: #fff;
		text-align: center;
	}
</style>
<body>
	<table>
		<thead>
			<tr>
				<th>Code</th>
				<th>Category</th>
				<th>Name</th>
				<th>Area</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($providers as $provider)
			<tr>
				<td>{{ $provider->id }}</td>
				<td>{{ $provider->name_provider }}</td>
				<td>{{ $provider->name_contact }}</td>
				<td><img src="{{ public_path().'/'.$provider->image_provider }}" width="40px"></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>
