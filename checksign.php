<?php
$con = mysqli_connect("localhost","root","","testdb");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$a=$_POST["un"];
$b=$_POST["pass"];
//echo $a.$b;
$sql="select pass from car1 where name='$a';";
$res=mysqli_query($con,$sql);
$r=mysqli_fetch_array($res);
if((string)$r[0]==(string)$b)
{
    echo '<script type ="text/JavaScript">';  
    echo 'alert("you have logged in successfully");window.location.href="index.html";';  
    echo '</script>';
   sleep(1);
    
  //  header('Location:index.html');
}
else{
    echo"wrong password";
}

mysqli_close($con);
?> 