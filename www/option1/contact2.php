<!DOCTYPE html>
<html>
<head>
  <title>Violas</title>
  <link rel="stylesheet" type="text/css" href="style2.css"
</head>

<body>
  <?php
  # $mytext=$_POST["mytext"];
  # $mytext = trim($mytext); # remove training spaces
  # $mytext = stripslashes($mytext); #remove backslashes
  # $mytext = htmlspecialchars($mytext);
  # print $mytext;

  $email=$_POST["email"];
  $name=$_POST["name"];
  $phone=$_POST["phone"];
  $q1=$_POST["q1"];



  $query='insert into contactFields (email, name, phone, q1) values("'.$email.'","'.$name.'","'.$phone.'","'.$q1.'");';
  echo $query;
  T_REQUIRE "mysqli_connect2.php";
  $dbc->query($query);
 ?>

 </body>
 </html>
