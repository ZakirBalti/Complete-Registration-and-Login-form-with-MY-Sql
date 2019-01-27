<?php
if(isset($_POST['update'])){
$servername = "localhost";
$username = "root";
$password = "";
$db="batch4";
// Create connection

$conn = new mysqli($servername, $username, $password,$db);

 $Id= $_GET['Id'];
$name=$_POST['name'];
 $phone = $_POST['cell_number'];
$email = $_POST['email'];

//$d= mysql_query("SELECT * FROM dir WHERE Id='$Id' ");
//$check= mysql_fetch_assoc($d);
$q = "UPDATE  dir SET name='$name', cell_number='$phone' ,email= '$email' WHERE Id=$Id ";

$query =    mysqli_query($conn,$q);

    header('location:main.php');
}

?>
<HTML>
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
<form Method="POST" action="#">
<div class="card">
<div class="card-header bg-dark">
        <h1 class="text-white" style="text-align:center"> Phone Directory</h1>
      </div>
      <div class="col-sm-6" id="font">
<label >Name</label>  <input type="text" name="name" class="form-control" required>

<label >Cell Numer</label> <input type="text" name="cell_number" class="form-control"   required>

<label>Email</label> <input type="text" name ="email" class="form-control"  required> <br>
<input type="Submit" value="update" name="update" class="btn btn-success btn-lg">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
<button><a href="user.php" class="btn btn-success btn-lg">Registration</a></button> &nbsp; &nbsp; &nbsp; &nbsp;<button><a href="signin.php" class="btn btn-success btn-lg">Sign In </a></button>
</div>
</div>
</form>
</div>
<div class="footer">
  <p>Footer</p>
</div>
</body>
</HTML>