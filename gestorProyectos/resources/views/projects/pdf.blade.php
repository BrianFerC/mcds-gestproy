<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PDF All Projects</title>
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
				<th>Class</th>
				<th>Budget</th>
				<th>State</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($projects as $project)
			<tr>
				<td>{{ $project->code }}</td>
				<td>{{ $project->category->name }}</td>
				<td>{{ $project->name }}</td>
				<td>{{ $project->area }}</td>
				<td>{{ $project->class }}</td>
				<td>{{ $project->budget }}</td>
				<td>{{ $project->state }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>