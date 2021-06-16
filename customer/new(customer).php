<!doctype html>

<?php
	$servername = "localhost";
	$username="root";
	$password="";
	$dbname="wedding";
	try{
		$conn = new mysqli($servername, $username,$password,$dbname);
		}catch(MySQLi_Sql_Exception $ex){
		echo("error in connection");
		}
	
	if(isset($_POST['submit']))
	{
		$cname=$_POST['cname'];
		$pass=$_POST['pass'];
		$caddress=$_POST['caddress'];
		$cph = $_POST['cph'];
		$email=$_POST['email'];
		
		$register_query = "INSERT INTO `customer`(`cname`,  `pass`, `caddress`, `cph`, `email`) VALUES ('$cname','$pass','$caddress','$cph','$email')";
		
		$SELECT = "SELECT email Form `customer` where email = $email limit 1 ";

		$result = $conn -> prepare($SELECT);
		
		
    
		try{
		
			$register_result = mysqli_query($conn, $register_query);
			if($register_result){
				if(mysqli_affected_rows($conn)>0){
				echo '<script>alert("registration successful")</script>';
				}else{
				echo("error in registration");
				}
		 
				}
			}catch(Exception $ex){
			echo("error".$ex->getMessage());
			}
		}

 
?>



<html>
<head>
	<meta charset="utf-8">
	<title> Registration Form</title>
	
	<meta name= "viewport" content="width = device - width, initial-scale = 1, shrink-to-fit = no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<style type="text/css">
			body {
				
				background: url(hh.jpg) fixed;
				background-size: cover;
			}
		  	.btn{

   			margin:10px 20px;
    		line-height: 20px;
			}
div.card {
	background-color:  #ffe6e6;
	margin-left: 540px ;
	margin-top: 15px;
    width: 400px;
    box-shadow: 0 10px 12px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    text-align: center;
}

div.container {
  padding: 20px;
 
}
ul.list-group  {

  margin-left: 30px;
  margin-right: 30px;
 
}

		</style>
	</head>
	<br><br>
	<body>

		<form action = "" method = "post" >
			
			<div class="card">
 <br>
    <h1>WEDLOCK</h1>
 
      <div class="container">
      <ul class="list-group ">

      	<input type = "text" name = "cname" required = "required"placeholder="Name">
    	<br>
    	<input type = "password" name = "pass" required = "required" placeholder="Password">
    	<br>
    	<input type = "text" name = "caddress" required = "required"placeholder="Address">
    	<br>
    	<input type = "tel" name = "cph" required = "required"placeholder="Phone">
    	<br>
    	<input type = "email" name = "email" required = "required"placeholder="Email">
    	
  </ul>
  <br>
			<button type="submit" name="submit" value="SignUp" class="btn btn-primary" 
			style="background-color:#660033">SignUp</button> 
			<a href="home.php"  class="btn btn-info" role="button" style="background-color: #003300">Back</a>
  </div>
</div>
	</form>
	
	<!-- Optional JavaScript -->
	    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
