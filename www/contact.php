<!DOCTYPE html>
<html>
<!--html and css portion of website project, created by Katie McCarver for CS321. Used w3schools and class slides as reference-->

<head>
  <script src="forms.js"></script>
  <link src="/css/style.css" rel="stylesheet" />
  <title>Violas</title>

</head>

<body>
  <div class="header">
    <a class="active" href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#music">Music</a>
    <a href="#shopping">Shopping</a>
    <a href="#sources">Sources</a>
    <a href="#contact">Contact</a>
  </div>

  <h1>Voila, <em>Violas!</em></h1>

  <img src "https://www.musicnotes.com/images2/search_feature/600x600_viola-min-.jpg" class="center" alt="Person Playing Viola">

  <div id="home">
    <h2>Home</h2>
    <p> Welcome to the webpage all about violas! Here you’ll find a description, brief history, and information about the stringed instrument. There will also be links to some prominent music pieces featuring violas, and links to reputable shops that sell
      violas and/or accessories. Also included are some of the sources for the information on violas. Enjoy!</p>

    <div id="contact">
      <h2>Contact Form</h2>
      <form action="../forms" method="POST">

        <div class="formitem">
          <label for="name">Name: </label>
          <div id="errorname" class="error"></div>
          <input type="text" id="name" minlength="3" name="name">
        </div>
        </br>
        <div class="formitem">
          <label for="phone">Phone: </label>
          <div id="errorphone" class="error"></div>
          <input type="phone" id="phone" placeholder="000-000-0000" name="phone">
        </div>
        </br>
        <div class="formitem">
          <label for="email">Email: </label>
          <div id="erroremail" class="error"></div>
          <input type="email" id="email" placeholder="xxx@xxxx.xxx" name="email">
        </div>
        </br>
        <input type="checkbox" id="myChecking1" onclick="myCheckFunction()">'Check the Boxes'
        <input type="checkbox" id="myChecking2" onclick="myCheckFunction()">
        <input type="checkbox" id="myChecking3" onclick="myCheckFunction()">
        <p id="text" style="display:none">Thanks For Checking the Boxes</p>
        </br>
        <div class="formitem">
          <label for="regarding">I'm Contacting Regarding: </label>
          <div id="errorregarding" class="error"></div>
          <select name="regarding">
                  <option value="#">Select One</option>
                  <option value="service">Music Questions</option>
                  <option value="incident">Reporting Info Error</option>
                  <option value="question">Quick Question</option>
                  <option value="feedback">Just Feedback!</option>
                </select>
        </div>
        </br>

        <button type="button" onclick="both()">Submit</button>

        <div class="footer">
          <p>VIOLAS</p>
        </div>

</body>

</html>
