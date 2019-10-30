<!DOCTYPE html>
<html>
<!--html and css portion of website project, created by Katie McCarver for CS321. Used w3schools and Codecademey as reference-->
<head>
  <link href="style.css" rel="stylesheet" type="text/css"/>
  <title>Violas</title>
</head>

<body>

<?php
// define variables and initialize with empty values
$nameErr = $emailErr = $regardingErr = "";
$name = $email = "";
$regarding = array();

if(isset($_POST['submit']))
{
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Missing";
    }
    else {
        $name = $_POST["name"];
    }

    if (empty($_POST["email"]))  {
        $emailErr = "Missing";
    }
    else {
        $email = $_POST["email"];
    }

    if (empty($_POST["regarding"])) {
        $regarding = "You must select 1 or more";
    }
    else {
        $regarding = $_POST["regarding"];
    }
}
}
if( empty($_POST["check1"]) ) { echo "Checkbox was left unchecked."; }
		else { echo "Checkbox was checked."; }
		if( empty($_POST["check2"]) ) { echo "Checkbox was left unchecked."; }
		else { echo "Checkbox was checked."; }
		if( empty($_POST["check3"]) ) { echo "Checkbox was left unchecked."; }
		else { echo "Checkbox was checked."; }
?>
  <div class ="header">
      <a class="active" href="#home">Home</a>
      <a href="#about" >About</a>
    <a href="#music" >Music</a>
    <a href="#shopping">Shopping</a>
	<a href="#contact">Contact</a>
    <a href="#sources">Sources</a>
  </div>
      
  <h1>Voila, <em>Violas!</em></h1>

 <!-- <img src  class="center" alt="Person Playing Viola"/>-->
 
  <div id="home">
    <h2>Home</h2>
    <p>  Welcome to the webpage all about violas! Here you’ll find a description, brief history, and information about the stringed instrument. There will also be links to some prominent music pieces featuring violas, and links to reputable shops that sell violas and/or accessories. Also included are some of the sources for the information on violas. Enjoy!</p>
  
  <div id="contact">
	<h2>Contact Form</h2>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">>
	<p>Name</p> <input type="text" minlength="3" name="name" value="">
	<p>Email</p> <input type="text" placeholder="xxx@xxxx.xxx" name="email" value="">
	<p>Phone</p> <input type="phone" placeholder="000-000-0000" name"phone" value="">
	<p>Here For:</p> <input type="checkbox" name="check1" value="Yes"> Check One<br>
	<input type="checkbox" name="check2" value="Yes"> Check Two<br>
	<input type="checkbox" name="check3" value="Yes"> Check Three<br>

	<input type="submit" name="submit" value="Submit">
	<input type="reset" value="Clear">

	</form>


<div class="footer">
  <p>VIOLAS</p>
    </div>

 </body> 
</html>