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
            <li><a href="narcotics.php">Narcotics</a></li>
			<li><a href="prostitution.php"> Prostitution</a></li>
			<li><li class="current"><a href="laws.php">Laws</a></li>
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

				echo '<h1 class="page-title">Laws</h1>
				  <p> Narcotics </p>
					<p> Even when the Dutch embrace the human needs when it comes to sex and the use of narcotics there are still laws in 
					the Netherlands that people need to honour. </p>';
			//}
		  ?>
          <!--<ul id="services">-->
			<?php
			if(isset($_SESSION['u_pol'])&&!isset($_POST['opium'])&&!isset($_POST['prosti'])){
				accessDb("SELECT * from law WHERE law like '%opium%'",'law');
				editingForm('opium');
				
				accessDb("SELECT * from law WHERE law like '%prosti%'",'law');
				editingForm('prosti');
			}
			elseif(!isset($_SESSION['u_pol'])&&!isset($_POST['commit'])){
				
				accessDb("SELECT * from law WHERE law like '%opium%'",'law');
				echo '<ul>';
				accessDb("SELECT * from law WHERE law like '%opium%'",'Sanction');
				echo "</ul><p> Prostitution</p>";
				accessDb("SELECT * from law WHERE law like '%prosti%'",'law');
				echo '<ul>';
				accessDb("SELECT * from law WHERE law like '%prosti%'",'Sanction');
				echo '</ul>';
				

			
			}	
?>
        </article>
      </div>
    </section>
	<?php
	if(!isset($_POST['prosti'])&&!isset($_POST['opium'])){
	include_once 'footer.php';
	}
	?>
  </body>
</html>
