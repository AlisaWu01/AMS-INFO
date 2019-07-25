<?php

	if(!isset($_SESSION)){
		session_start();
	}
	include 'dbh.php';
	include_once 'linkDb.php';
	include_once 'editingForm.php';
	?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
	  <meta name="keywords" content="web design, affordable web design, professional web design">
  	<meta name="author" content="AMSTERDAM-INFO">
    <title>AMS.INFO |Narcotics</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Amsterdam</span> tourist guide</h1>
        </div>
        <nav>
          <ul>
            <li><a href="index1.php">Home</a></li>
			<li <li class="current"><a href="narcotics.php">Narcotics</a></li>
			<li><a href="prostitution.php"> Prostitution</a></li>
			<li><a href="laws.php">Laws</a></li>
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
		<?php
			echo '<h1 class="page-title">Narcotics</h1>
					 <p> Nowadays it is common knowledge in the world that Amsterdam is the city where you can consume soft drugs without getting punished for it, it is actually legal. As soon you walk into an coffeeshop you will see a menu with the different drugs you can consume. The Dutch believe that every human being is able to make decisions about the matters of its own health. They also believe that when they would forbid the use of all kind of narcotics it would not make it disappear, but on the contrary make it worse. Whenever something is concealed it is difficult to control and influence. 
				   You are allowed to use soft drugs in the Netherlands. Trading, producing or stocking soft drugs in Netherlands is just like in any other country in the world a criminal offence. Soft drugs are defined as narcotics with a low risk of addiction and/or harm. The soft drugs that are consumed frequently in the Netherlands are marijuana and hash. 
				   The effects that you can aspect when consuming them are: </p>';
			if(isset($_SESSION['u_doc'])&&!isset($_POST['Marijuana'])&&!isset($_POST['hash'])){
				accessDb("SELECT * from narcotic WHERE DrugName ='Marijuana'",'DrugName');
				editingForm('Marijuana');
				accessDb("SELECT * from narcotic WHERE DrugName = 'hash'",'DrugName');
				editingForm('hash');
			}elseif(!isset($_SESSION['u_doc'])){	
				accessDb("SELECT * from narcotic WHERE DrugName ='Marijuana'",'DrugName');
				echo '<ul>';
				accessDb("SELECT * from narcotic WHERE DrugName ='Marijuana'",'Effect');
				echo'</ul><br>';
				accessDb("SELECT * from narcotic WHERE DrugName = 'hash'",'DrugName');
				echo '<ul>';
				accessDb("SELECT * from narcotic WHERE DrugName = 'hash'",'Effect');
				echo'</ul>';
				
				echo'<br><br><img src="./images/cannabis.jpg" alt="Trulli" width="500" height="333">
						<img src="./images/hash.jpg" alt="Trulli" width="500" height="333">';

			}
?>		<!--<img src="./images/cannabis.jpg" alt="Trulli" width="500" height="333">
		<img src="./images/hash.jpg" alt="Trulli" width="500" height="333">-->
        </article>
      </div>
    </section>
	<?php
	if(!isset($_POST['Marijuana'])&&!isset($_POST['hash'])){
	include_once 'footer.php';
	}
	?>
  </body>
</html>
