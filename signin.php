<?php
if(isset($_POST['login'])){
$email =$_POST['email'];
$pass=$_POST['password'];
$servername="localhost";
$username="root";
$password="";
$conn= mysqli_connect($servername,$username,$password,'batch4');
$sql= "SELECT email , password FROM user WHERE email='$email' AND password='$pass'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
  
    header('Location:main.php');
} else {
    echo "invalid email or password";
}
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
<form Method="POST" action="">
<div class="card">
<div class="card-header bg-dark">
        <h1 class="text-white" style="text-align:center"> Login Form</h1>
      </div>
      <div class="col-sm-6" id="font"><br>
<label >Email</label>  <input type="text" name="email" class="form-control" required>


<label>Password</label> <input type="password" name ="password" class="form-control"  required> <br>
<input type="Submit" value="Login" name="login" class="btn btn-success btn-lg">
&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<button><a href="user.php" class="btn btn-success btn-lg">Register </a></button>
</div><br>
</div>


</form>

</div>


<div class="footer">
  <p>Footer</p>
</div>
</body>
</html>