<!DOCTYPE html>
<html>
<!--html and css portion of website project, created by Katie McCarver for CS321. Used w3schools and Codecademey as reference-->
<head>
  <link href="style2.css" rel="stylesheet" type="text/css"/>
  <title>Violas</title>
</head>

<body>


  <div class ="header">
      <a class="active" href="#home">Home</a>
      <a href="#about" >About</a>
    <a href="#music" >Music</a>
    <a href="#shopping">Shopping</a>
	<a href="#contact">Contact</a>
    <a href="#sources">Sources</a>
  </div>

<?php include 'header.php';?>
  <!-- <h1>Voila, <em>Violas!</em></h1> -->
 <!-- <img src  class="center" alt="Person Playing Viola"/>-->

  <div id="home">
    <h2>Home</h2>
    <p>  Welcome to the webpage all about violas! Here you’ll find a description, brief history, and information about the stringed instrument. There will also be links to some prominent music pieces featuring violas, and links to reputable shops that sell violas and/or accessories. Also included are some of the sources for the information on violas. Enjoy!</p>
    </div>

    <div id="contact">
    <h1>Contact Form</h1>

<p>
  <form action="contact2.php" method="post">
    What is your email addresss?
    <input type="email" name="email" placeholder="xxx@xxxx.xxx">
  </br>
    What is your name?
    <input type="text" name="name" minlength="3">
  </br>
    What is your phone number?
    <input type="phone" placeholder="000-000-0000" name="phone">
  </br>
    Why are you here?
    </br>
      <select name="q1">
        <option value="info"> For Info </option>
        <option value="fun"> For Fun! </option>
        <option value="correct"> To Correct </option>
      </select>
    <br />
      <br />
      <input type="submit" value="Submit">
    </form>
</p>

<footer>
<?php include 'footer.php';?>
</footer>
<!-- <div class="footer">
  <p>VIOLAS</p>
</div> -->

 </body>
</html>
