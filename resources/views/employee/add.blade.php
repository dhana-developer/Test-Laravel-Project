<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>   
	<div class="container" style="margin:100px;">  
		<div class="card" style="padding:50px">
			<form action="{{ route('store.employee') }}" method="POST">
				@csrf
				<div class="form-group" style="padding:10px">
				  <label for="exampleInputEmail1">Employee Name</label>
				  <input type="text" name="employee_name" class="form-control" aria-describedby="emailHelp" placeholder="Enter Employee name">
				</div>
				<div class="form-group" style="padding:10px">
					<label for="exampleInputEmail1">Employee Age</label>
					<input type="text" name="employee_age" class="form-control" aria-describedby="emailHelp" placeholder="Enter Employee age">
				  </div>
				  <div class="form-group" style="padding:10px">
					<label for="exampleInputEmail1">Employee Email</label>
					<input type="email" name="employee_email" class="form-control" aria-describedby="emailHelp" placeholder="Enter Employee email">
				  </div>
				  <div class="form-group" style="padding:10px">
					<label for="exampleInputEmail1">Employee Mobile number</label>
					<input type="text" name="employee_mobile" class="form-control" aria-describedby="emailHelp" placeholder="Enter Employee email">
				  </div>
				  <div class="form-group" style="padding:10px">  
					<label for="exampleInputEmail1">Employee Address</label>
					<textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"></textarea>
				  </div>
			
				<button type="submit" class="btn btn-primary" style="margin:10px">Submit</button>
			  </form>
		</div>
	</div>  
	
	<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>