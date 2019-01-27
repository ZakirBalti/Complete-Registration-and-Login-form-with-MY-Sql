<HTML>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style.css">
</head>

<table  class=" table table-striped table-hover table-bordered">
<tr class="bg-dark text-white text-center">
<th class="bg-dark text-white text-center"> Id
</th>
<th >Name
</th>
<th>Mobile number
</th>
<th>Email Address
</th>
<th>Directory
</th>
<th>Update
</th>
<th>Delete
</th><tr>
<?php
$servername="localhost";
$username="root";
$password="";
$conn= mysqli_connect($servername,$username,$password,'batch4');

$q= "SELECT * FROM `dir` ";
$qu= mysqli_query($conn,$q);


// while loop end
while($row= mysqli_fetch_assoc($qu)){
   
  ?>
  <tr><td><?php echo $row['Id'];  ?></td><td><?php echo $row['name'];  ?></td><td><?php echo $row['cell_number'];  ?></td><td><?php echo $row['email'];  ?></td>
  <td> <button class="btn btn-success btn-lg"> <a href="create.php" class="text-white">Add</a> </button></td>
  <td> <button class="btn-primary btn"> <a href="update.php?Id=<?php echo $row['Id']; ?>"class="text-white">Update</a> </button></td>
 <td> <button class="btn-danger btn"> <a href="delete.php?Id=<?php echo $row['Id']; ?>"class="text-white">Delete</a> </button></td> </tr>
   
 
   

<?php
}

?>
<div class="footer">
footer section
<br>
<br>
</div>
<body>
</table>
</HTML>