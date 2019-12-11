
<!DOCTYPE HTML>
<html>
<head>
  <link href="style2.css" rel="stylesheet" type="text/css"/>
  <title>Violas</title>
</head>
<body>

  <?php include 'head.php';?>

<?php
// define variables and set to empty values
$emailErr = $nameErr = $phoneErr = $q1Err = "";
$email = $name = $phone = $q1 = "";


  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["phone"])) {
    $phoneErr = "Phone is required";
  } else {
    $phone = test_input($_POST["phone"]);
    // check if e-mail address is well-formed
    if (!filter_var($phone, FILTER_VALIDATE_EMAIL)) {
      $phoneErr = "Invalid phone format";
    }
  }
  if (empty($_POST["q1"])) {
    $q1Err = "Reason is required";
  } else {
    $q1 = test_input($_POST["q1"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Contact Form</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<br />

  E-mail: <input type="text" placeholder="xxx@xxxx.com" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Phone: <input type="tel" placeholder="000-000-0000" name="phone">
  <span class="error">* <?php echo $phoneErr;?></span>
  <br><br>
  Reason:
  <input type="radio" name="q1" value="info">Info
  <input type="radio" name="q1" value="fun">Fun
  <input type="radio" name="q1" value="correct">Correct
  <span class="error">* <?php echo $q1Err;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>
<br />
<br />

<?php
$query= 'INSERT INTO contactFields (email, name, phone, q1) VALUES("'.$email.'","'.$name.'","'.$phone.'","'.$q1.'");';
echo $query;
echo "<br /><br />";
REQUIRE "mysqli_connect2.php";
$dbc->query($query);

$sql = "SELECT email, name, phone, q1 FROM contactFields LIMIT 2;";
$result = mysqli_query($dbc, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo "<table><tr><th>Email</th><th>Name</th><th>Phone</th><th>Reason</th></tr>";
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row["email"]."</td><td>".$row["name"]."</td><td>".$row["phone"]."</td><td>".$row["q1"]."</td></tr>";
      }
 }
} else {
   echo "0 Results";
 }

mysqli_close($dbc);
?>

</body>

<footer>
<?php include 'footer.php';?>
</footer>

</html>
