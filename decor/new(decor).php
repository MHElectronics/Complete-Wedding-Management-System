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
		$dname=$_POST['dname'];
		$daddress=$_POST['daddress'];
		$dphone = $_POST['dphone'];
		$email=$_POST['email'];
		$user = $_POST['dusername'];
		$pass = $_POST['pass'];
		$dprice = $_POST['dprice'];
		$image = $_POST['image'];
	
  	$target = "image/".basename($image);
		
		$register_query = "INSERT INTO `decoration`(`dname`,  `daddress`,  `dphone`, `email`, `dusername`, `pass`,`dprice`,`image`) VALUES ('$dname','$daddress','$dphone','$email','$user','$pass','$dprice','$image')";
		
		$SELECT = "SELECT email Form decoration where email = $email limit 1";

		$result = $conn -> prepare($SELECT);
      
		try{
		
			$register_result = mysqli_query($conn, $register_query);
			if($register_result){
				if(mysqli_affected_rows($conn)>0){
				echo '<script>alert("registration successful")</script>';
				}else{
				echo '<script>alert("error in registration")</script>';
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
	<meta name= "viewport" content="width = device - width, initial-scale = 1, shrink-to-fit = no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<title> Registration Form</title>
	<style type="text/css">
			body {
				
				background: url(hh.jpg) fixed;
				background-size: cover;
			}
		  	.btn{

   			margin:10px ;
    		line-height: 20px;
			}
div.card {
	background-color:  #ffe6e6;
	margin-left: 540px ;
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

      	<input type = "text" name = "dname" required = "required"placeholder="Company Name">
    	<br>
    	<input type = "text" name = "daddress" required = "required"placeholder="Location">
    	<br>
    	<input type = "text" name = "dprice" required = "required"placeholder="Price">
    	<br>
    	<input type = "tel" name = "dphone" required = "required"placeholder="Phone">
    	<br>
    	<input type = "email" name = "email" required = "required"placeholder="Email">
    	<br>
    	<input type = "text" name = "dusername" required = "required"placeholder="User Name">
    	<br>
    	<input type = "password" name = "pass" required = "required" placeholder="Password">
    	<input type="file" name="image"  />
    	
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