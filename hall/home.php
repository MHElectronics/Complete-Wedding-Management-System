
<!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      <title>WEDLOCK</title>
    <style type="text/css">
    body {
      background-color: #F1E2E2;
      /*font-family : arial;*/
      font-size : 18px;
      line-height : 18px;
      color : #000;
      padding: 4px;
      margin: 12px;
      background: url(h2.jpg) no-repeat;
      margin-left : 21px;
      background-size:  cover;
    }
    .btn1{
        background-color: #003300;
        border-radius: 15px;
        color: white;
      }
  .btn1:hover {
    background-color: #ff704d;
    color: white;
    }
    .btn2{
        line-height: 30px;
        border-radius: 25px;
        background-color: #ff704d;
        color: white;
      }
.btn2:hover {
  background-color: #004d00;
  color: white;
}
 
div.container {
text-align: center;
 width: 400px;
 
}

h1{
  color: white;
}
    <select name="Catagory" required style ="width:155px;height:47px;" >
                  <option selected hidden value="">Catagory</option>
                  <option value="Hall">Hall</option>
                  <option value="Food">Food</option>
                  <option value="Decor">Decor</option>
                  <option value="Makeover">Makeover</option>
                  <option value="Photo Blust">Photo Blust</option>
                  <option value="Accessorise">Accessorise</option>
                </select>
  </style>
    
    </head>
    <body>
      <form action = "login.php" method = "post" >
      
      <!-- <div class="card"> -->
         <div class="container">
 <br>
    <h1>WEDLOCK</h1>
    <hr>
    <ul class="list-group ">
    <td><a href="../customer\new(customer).php" class="btn btn2" role="button">Sign Up As Customer </a></td>
    <br>
    <a href="new(hall).php" class="btn btn2" role="button">Sign Up As Hall Owner</a>
    <br>
    <a href="../food\new(food).php" class="btn btn2" role="button">Sign Up As Food Company Owner</a>
    <br>
    <a href="../decor\new(decor).php" class="btn btn2" role="button">Sign Up As Decoration Company Owner</a>
    <br>
    <a href="../photoblust\new(photo).php" class="btn btn2" role="button">Sign Up As Photographer Company Owner</a>
    <br><h>
    <hr>
    <a href="../index.html" class="btn btn1" role="button">Back</a>
  </ul>
     <!-- </div> -->
</div>
  </form>
    
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>