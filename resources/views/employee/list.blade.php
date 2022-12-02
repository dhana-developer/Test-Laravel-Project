<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<table class="table">
		<thead>
		  <tr>
			<th scope="col">Employee name</th>
			<th scope="col">Employee age</th>
			<th scope="col">Employee email</th>
			<th scope="col">Employee mobile</th>
			<th scope="col">Employee address</th>
			<th scope="col">Action</th>
		  </tr>
		</thead>  
		<tbody>
			@foreach($employees as $employee)
			<tr>
				<td>{{ $employee->employee_name }}</td>
				<td>{{ $employee->employee_age }}</td>
				<td>{{ $employee->employee_email }}</td>
				<td>{{ $employee->employee_mobile }}</td>
				<td>{{ $employee->address }}</td>
				<td></td>
			</tr>
			@endforeach  
		</tbody>
	  </table>
</body>
</html>