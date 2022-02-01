<?php
$con=mysqli_connect("localhost","root","","mydb");
$id=$_GET['id'];

$a=mysqli_query($con,"select * from mytbl where id='$id'");

$row=mysqli_fetch_array($a);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<form action="" method="post">

<input  type="text" value="<?php echo $row[1];?>" name="txtname"/>
<br>
<input  type="text" value="<?php echo $row[2];?>" name="txtdate"/>
<br>
<input type="submit" name="btn" value="Insert"/>
</form>

<?php


if(isset($_POST['btn']))
{

    $name =$_POST['txtname'];
    $date =$_POST['txtdate'];
    $qu=mysqli_query($con,"update mytbl set name='$name', date='$date' where id='$id'");
    if($qu)
    {
        echo "<script>alert('data updated')</script>";
        header("location:select.php");

    }
    else
    {

        echo "<script>alert('data not updated')</script>";
    }


    
}

?>



    
</body>
</html>
