<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="/css/global.css">
  <link rel="stylesheet" type="text/css" href="/css/megaMenu.css">
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="/javascript/include.js"></script>
  


<title>Hurrican Ditka Fantasy Football Draft Tool</title>
</head>
<body>
  

<!--<div id="navbar">-->

  <div w3-include-html="/components/megaMenu.html"></div>
  


<img class="hero" src="/images/ditka_hero.jpg">
  
<div class="bodyContainer">

<div><!--need to get this to lay on top of the image along with the PHP DB output

    https://www.w3schools.com/howto/howto_css_image_text.asp

-->
  <h1>Welcome to the 2018 Hurricane Ditka Fantasy Draft!</h1>
  <p>Please select your name to login</p>
</div>

<!--
      below code loads users from database and puts them into buttons
    
-->

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

require 'dbConnectOriginal.php';


?>


</div><!--close body container-->


<script>includeHTML()</script>
</body>
</html>
