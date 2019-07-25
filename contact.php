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
    <title>AMS.INFO | Contact</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">AMSTERDAM</span> tourist guide</h1>
      </div>
        <nav>
          <ul>
            <li><a href="index1.php">Home</a></li>
			<li><a href="narcotics.php"> Narcotics</a></li>
			<li><a href="prostitution.php"> Prostitution</a></li>
			<li><a href="laws.php"> Laws</a></li>
			<li><a href="about.php">About us</a></li>
			<li><a href="login1.php">Login Portal</a></li>
			<li  class="current"><a href="contact.php">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>


    <section id="main">
      <div class="container">
        <article id="main-col">
          <h1 class="page-title">Contact</h1>
           <p> Thank you for visiting our page. Whenever you have questions or wants to make use <br> of our services, please don’t hestitate to contact us.  </p>
		   <p> AMS-INFO <br>
			   Tel: +31 6 48903797  <br>
			   E-mail: info@ams-info.com </p>
			   
        </article>
      </div>
    </section>



	
	
	
	
	
	
	
	
	
	
	
	
	
	

    <footer>
      <p>Amsterdaminfo webpage, Copyright &copy; 2018</p>
    </footer>
  </body>
</html>
