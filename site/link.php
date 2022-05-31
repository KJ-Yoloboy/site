<!DOCTYPE html>
<html>
<body>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="informatie.html">Informatie</a></li>
  <li><a href="foto.html">Foto's</a></li>
  <li><a href="Github.html">Download</a><li>

</ul>

</body>
</html>
<style>
body {
  background-image: url('343.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;


}

  h1 {
    text-align: center;
  }
  </style>
</head>
<body>

<h1 style="background-color:white;">Download!</h1>



<h3 style="color: white;">Bedankt voor het registreren.</h3>
<br>
<h3 style="color: white;">Je kunt onze game downloaden.</h3>
<br>
<h3 style= "color: white;">Via deze link!</hs>

  <!DOCTYPE HTML>
  <html>
  <body>


  </body>
  </html>
<html>
<head>
<style>
h3 {
  text-align: center;
}
</style>
</head>
<body>
  Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

<?php
$myfile = fopen("email.txt", "a") or die("Unable to open file!");
$txt = $_POST["name"] . "\n";
fwrite($myfile, $txt);
$txt = $_POST["email"] . "\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
<br>
<img src="unnamed.png" alt="unnamed.png" width="60" class="center">
<br>
<h3 style="color: white;">Als je op deze link klikt kom je uit op de website van github. Hier kun je onze game downloaden en zelf proberen.</h3>
<br>
<h3 style="color: white;">Veel plezier met onze game!
  <br>
<html>
<body>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}


.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 20%;
}
</style>
</head>
<body>

<a href="https://github.com/KJ-Yoloboy/GameSoftware1" target="_blank">Download!</a>
