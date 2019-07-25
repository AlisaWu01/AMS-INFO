<?php

	if(!isset($_SESSION)){
		session_start();
	}
	include 'dbh.php';
	?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
	  <meta name="keywords" content="web design, affordable web design, professional web design">
  	<meta name="author" content="Brad Traversy">
    <title>AMS.INFO | Welcome</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">AMSTERDAM.</span>INFO</h1>
      </div>
        <nav>
          <ul>
            <li class="current"><a href="index1.php">Home</a></li>
			<li><a href="narcotics.php"> Narcotics</a></li>
			<li><a href="prostitution.php"> Prostitution</a></li>
			<li><a href="laws.php"> Laws</a></li>
			<li><a href="about.php">About us</a></li>
			<li><a href="login1.php">Login Portal</a></li>
			<li><a href="contact.php">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <php>
    
    </php>

    <section id="showcase">
      <div class="container">
        <h1>TAKE CARE NOT EVERYTHING IS ALLOWED HERE..</h1>
        <p>Here you can find out all the information you need before you visit the Netherlands!</p>
      </div>
    </section>





    <section id="boxes">
      <div class="container">
        <div class="box">
          	<img src="./images/cs.png" alt="Trulli">
          <h3>Coffee Shops</h3>
          <p> You would think you are entering a coffee shop, but than you see drugs on the menu...</p>
        </div>

        <div class="box">
          <img src="./images/flag.png">
          <h3>Amsterdam flag</h3>
          <p>This is the formal flag of Amsterdam...you will see it alot if you have been in Netherlands</p>
        </div>

        <div class="box">
          <img src= "./images/RLD.jpg">
          <h3>Prostitution in Amsterdam</h3>
          <p>The Facts about Window Prostitution in Amsterdam</p>
        </div>
      </div>
    </section>

    <footer>
      <p>Amsterdaminfo webpage, Copyright &copy; 2018</p>
    </footer>
  </body>
</html>
