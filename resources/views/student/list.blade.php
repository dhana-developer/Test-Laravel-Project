<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}     
</style>
<link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="    background: #f0f0f0;">

<h2 style="text-align: center;">Student List</h2>
<div style="    margin: 50px 100px;
background: #f9fafb;
padding: 50px;
border-radius: 10px;">
	<table id="myTable" style="padding: 25px;">   
		<thead>
			<tr>   
				<th>Student Name</th>
				<th>Course</th>  
				<th>Gender</th>
				<th>Phone no</th>
				<th>Email</th>
				<th>Action</th>
			  </tr>
		</thead>
		<tbody>
			@foreach($students as $student)
			<tr>
			  <td>{{ $student->first_name}} {{ $student->last_name}}</td>
			  <td>{{ $student->course}}</td>
			  <td>{{ $student->gender}}</td>
			  <td>{{ $student->phone_number}}</td>
			  <td>{{ $student->email}}</td>
			  <td><i class="fa fa-edit"></i> <i class="fa fa-eye"> <i class="fa fa-trash"></i></i></td>
			</tr>   
			@endforeach 
		</tbody>
		 
	  </table>
	     
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</body>
</html>
