<?php

	if(!isset($_SESSION)){
		session_start();
	}
	?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
	  <meta name="keywords" content="web design, affordable web design, professional web design">
  	<meta name="author" content="Brad Traversy">
    <title>AMS.INFO | About</title>
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
            <li><a href="narcotics.php">Narcotics</a></li>
			<li><a href="prostitution.php">Prostitution</a></li>
			<li><a href="laws.php">Laws</a></li>
			<li><li class="current"><a href="about.php"> About us </a></li>
			<li><a href="login1.php">Login Portal</a></li>
			<li><a href="contact.php">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>


    <section id="main">
      <div class="container">
        <article id="main-col">
		<?php
			if(isset($_SESSION['u_pol'])){
				echo '<h1>Unable to edit</h1>
						<p>Please choose another page</p>';
			}else{
				echo'
			<h1 class="page-title">About Us</h1>
			<aside id="sidebar">
				<div class="dark">
					<h3>WHAT WE DO</h3>
					<p> We are a team of young professionals who are trying to create a web-environment what professionals can use and apply in their profession. </p>
					<p> The main purpose is to make sure that any visitor to Amsterdam is informed well enough about prostitution, the use of narcotics and knows the laws. </p>
					<p> Any professional can log-in and use the information that is given or adjust it to its own, as long the same goal is being served.  </p>
			</aside>';
			}
			?>
				
        </article>
      </div>
    </section>




  <?php
  include 'footer.php'
  ?>
  </body>
</html>
