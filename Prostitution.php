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
			<li><a href="narcotics.php"> Narcotics</a></li>
			<li class="current"><a href="prostitution.php"> Prostitution</a></li>
			<li><a href="laws.php"> Laws</a></li>
			<li><a href="about.php">About us</a></li>
			<li><a href="login1.php">Login Portal</a></li>
			<li><a href="contact.php">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>


    <section id="main">
      <div class="container">
        <article id="main-col">
          <h1 class="page-title">Prostitution</h1>
           <p> Amsterdam city is very famous for her Red Light District. The Red Light District contains many sex businesses, brothels and strip clubs. You would think of a dangerous atmosphere, but in contrast it actually has a very friendly atmosphere. When it comes to prostitution, just as using soft drugs, the Dutch believe you should embrace the human needs in a responsible way. The industry is for all ages above 18.  </p>
		   <p> Prostitution is not allowed on the streets, that is why prostitutes stand up behind a window and have their own room. The most of action in the Red Light District takes place around 11pm, the district is crowded during that time until 2 or 3am. The district is also a home to the gay-scene. You can find a lot of gay bars and cinemas in the district. </p>
		   <p> It is forbidden to film woman or take pictures of them behind their windows. In the district it is always good to watch out for pick-pocketers, walking alone in the district is also not a good idea. It is smarter to visit the district with the two persons or more.  </p>
          
		  <img src="./images/sexshop.jpg" alt="Trulli" width="500" height="333">
		  <img src="./images/stripclub.jpg" alt="Trulli" width="500" height="333">
		 
        </article>
      </div>
    </section>




    
	
	
	
	
	
	
	
	
	
	
	<footer>
      <p>Amsterdaminfo webpage, Copyright &copy; 2018</p>
    </footer>
  </body>
</html>
