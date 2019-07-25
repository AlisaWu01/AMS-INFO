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
  	<meta name="author" content="AMSTERDAM-INFO">
    <title>AMS.INFO |Login Portal</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">AMS-INFO</span> Login Portal</h1>
        </div>
        <nav>
		<?php
		if(isset($_SESSION['u_adm'])){
			
		}else{
         echo' <ul>
                <li><a href="index1.php">Home</a></li>
				<li><a href="narcotics.php">Narcotics</a></li>
				<li><a href="prostitution.php"> Prostitution</a></li>
				<li><a href="laws.php">Laws</a></li>
				<li><a href="about.php">About us</a></li>
				<li class="current"><a href="login1.php">Login Portal</a></li>
				<li><a href="contact.php">Contact</a></li>';
		}
			
		?>
			<!--<li class="current"><a href="login1.php">Login Portal</a></li>-->
          </ul>
        </nav>
      </div>
    </header>







    <section id="main">
      <div class="container">
        <article id="main-col">

          <ul id="services">


          </ul>
        </article>




        <aside id="sidebar">
		
          <div class="dark">
		  <?php
		  if(isset($_SESSION['u_uid'])||isset($_SESSION['u_adm'])){
			  echo 'Welcome 
				<form class="quote" action="logout.php" method="POST">
					<button class="button_1" type="submit" name="submit">Logout</button>
					 </form>';
		  }
		  else{
            echo'<h1 class="page-title">Login</h1>
				<form class="quote" action="logfunction.php" method="POST">
  						<div>
  							<label>Username</label><br>
  							<input type="text" name="uid" placeholder="Username">
  						</div>
  						<div>
  							<label>Password</label><br>
  							<input type="password" name = "pwd" placeholder="Password">
  						</div>
  						<button class="button_1" type="submit" name="submit">Login</button>';
						
				}
						/*<form class="quote" action="logfunction.php" method="POST">
							<button class="button_1" type="submit" name="admin">Login as Admin</button>
						</form>';*/
					
					//include 'test.php';
				?>
          </div>
        </aside>
      </div>
    </section>
	<?php
	if(!isset($_SESSION['u_adm'])){
		include_once 'footer.php';
	}
	?>

  </body>
</html>