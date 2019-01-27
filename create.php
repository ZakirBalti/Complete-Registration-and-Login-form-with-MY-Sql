<?php
if(isset($_POST['submit'])){
if(!empty($_POST['name'] && $_POST['cell_number'])){


  $name=  $_POST['name'];
  $phone= $_POST['cell_number'];
  $email = $_POST['email'];
  $servername="localhost";
  $username= "root";
  $password= "";
  $conn= new mysqli($servername,$username,$password,'Batch4');
  $q= "INSERT INTO `dir` ( `name`, `cell_number`, `email`) VALUES ('$name','$phone','$email')";
  $query = mysqli_query($conn,$q);
}//end of validation if
}

?>




<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
</head>
<body>
<div class= "col-lg-12">
<form Method="POST">
<div class="card">
<div class="card-header bg-dark">
        <h1 class="text-white" style="text-align:center"> Phone Directory</h1>
      </div>
      <div class="col-sm-6" id="font">
<label >Name</label>  <input type="text" name="name" class="form-control" required>

<label >Cell Numer</label> <input type="text" name="cell_number" class="form-control"  required>

<label>Email</label> <input type="text" name ="email" class="form-control"  required> <br>
<input type="Submit" value="Submit" name="submit" class="btn btn-success btn-lg">
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<a href="user.php">Sign Up</a> &nbsp; &nbsp; &nbsp; &nbsp;<a href="signin.php">Sign In </a>
</div>
</div>
</form>
</div>

<div class="footer">
  <p>Footer</p>
</div>
</body>
</html>
