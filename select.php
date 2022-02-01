<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    
<div class="container">
<br>
<br>
<center><h1>Show Data</h1></center>
<table class="table table-bordered">
<tr align="center">
<th>Id</th>
<th>Name</th>
<th>Date</th>
<th>Action</th>
<?php
$con=mysqli_connect("localhost","root","","mydb");
$qu=mysqli_query($con,"select * from mytbl");
while($row=mysqli_fetch_array($qu))
{
echo "
<tr align='center'>
<td>$row[0]</td>
<td>$row[1]</td>
<td>$row[2]</td>
<td><a href='delete.php?id=$row[0]' class='btn btn-danger'>Delete</a>
<a href='edit.php?id=$row[0]' class='btn btn-info'>Update</a></td>

</tr>
";
}
?>
</tr>
</table>
</div>
</body>
</html>