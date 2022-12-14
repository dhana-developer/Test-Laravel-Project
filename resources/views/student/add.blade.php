<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #faf8f8;  
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
	padding: 35px;
    background-color: white;
    border-radius: 12px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>    
<body>

<form action="/action_page.php" style="margin: 60px 300px;">
  <div class="container">
    <h1>Student Registeration Form</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
	<label for="email"><b>First Name</b></label>
    <input type="text" placeholder="Enter Email" name="first_name" id="email" required>
	
	<label for="email"><b>Middle Name</b></label>
    <input type="text" placeholder="Enter Email" name="middle_name" id="email" required>
	
	<label for="email"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Email" name="last_name" id="email" required>

	<label for="email"><b>Course</b></label>
	<br>
	<select name="course" id="" style="width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;">
		<option value="BE">BE</option>
		<option value="ME">ME</option>
	</select>
<br>
	<label for="email"><b>Gender</b></label>
	<div>
		<input type="radio" id="html" name="gender" value="HTML">
		<label for="html">Male</label>
		<input type="radio" id="css" name="gender" value="CSS">
		<label for="css">Female</label>
		<input type="radio" id="javascript" name="gender" value="JavaScript">
		<label for="javascript">Other</label>
	</div>   
  <br>

	<label for="email"><b>Phone number</b></label>
    <input type="text" placeholder="Enter Phone number" name="phone_number" id="email" required>

	<label for="email"><b>Current Address</b></label> <br>
	<textarea id="current_address" name="current_address" placeholder="Enter current address" rows="4" cols="50" style="    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;   
    display: inline-block;
    border: none;
    background: #f1f1f1;"></textarea>
 <br>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Re-type Password</b></label>
    <input type="password" placeholder="Re-type Password" name="psw-repeat" id="psw-repeat" required>
    <hr>   
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>   
  </div>
 
</form>

</body>
</html>
