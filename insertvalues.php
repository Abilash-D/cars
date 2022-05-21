<?php
$con = mysqli_connect("localhost","root","","testdb");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$a=$_POST["n"];
$b=$_POST["a"];
echo $a.$b;
$sql="INSERT INTO car1 VALUES ('$a','$b');";
$res=mysqli_query($con,$sql);
if($res)
{
    echo "record updated successfully";
}
else{
    echo"error while updating";
}

mysqli_close($con);
?> 