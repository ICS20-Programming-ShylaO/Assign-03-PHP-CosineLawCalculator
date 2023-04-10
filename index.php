<!DOCTYPE html>
<!-- ICS20-Programming-Assign-03-PHP-CosineLawCalculator -->
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Cosine Law Calculator, with PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Shyla Oommen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Cosine Law Calculator, Using PHP</title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Calculating the Side/Angle with Cosine Law, Using PHP</h1>";
			echo "<h3>This program can calculate a side or angle of a triangle, given the other sides (and the corresponding side/angle to what you’re looking for). Keep in mind the capitalization and that we will be solving for side c or angle C.</h3>";
		?>
    <center>
    <img src="./images/cosinelaw_side.png" alt="Cosine Law for a Side" width="35%" height="35%">
    <img src="./images/cosinelaw_angle.png" alt="Cosine Law for an Angle" width="35%" height="35%">
    </center>
		<!-- To solve side c -->
    <form action="./answers.php" method="post" target="results">
      <label for="lblSideA">Side a (cm):</label>
      <input type="text" id="side-a" placeholder="Eg. 5" name="side-a"><br><br>
      <label for="lblSideB">Side b (cm):</label>
      <input type="text" id="side-b" placeholder="Eg. 5" name="side-b"><br><br>
      <label for="lblAngleC">Angle C (deg):</label>
      <input type="text" id="angle-c" placeholder="Eg. 75" name="angle-c"><br><br>
      <input type="submit" value="Calculate">
		</form>
    <!-- iframe for the side*** results to show on the web page. -->
    <center>
      <iframe id="results-side" name="results-side">	
        Side c is about. "$sideCAnsRounded" . cm.
	    </iframe>
    </center>
    <!-- To solve angle C -->
    <form action="./answers_angle.php" method="post" target="results">
      <label for="lblSideAAng">Side a (cm):</label>
      <input type="text" id="side-a-ang" placeholder="Eg. 5" name="side-a-ang"><br><br>
      <label for="lblSideBAng">Side b (cm):</label>
      <input type="text" id="side-b-ang" placeholder="Eg. 5" name="side-b-ang"><br><br>
      <label for="lblAngleC">Side c (cm):</label>
      <input type="text" id="side-c" placeholder="Eg. 75" name="side-c"><br><br>
      <input type="submit" value="Calculate">
		</form>
    <!-- iframe for the angle*** results to show on the web page. -->
    <center>
      <iframe id="results-angle" name="results-angle">	
        Angle C is about. "$AngleCAnsRounded" .°.
	    </iframe>
    </center>
  </body>
</html>