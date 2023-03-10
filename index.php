<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="My first webpage with user input">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Ms Raffin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index1/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index1/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index1/favicon-16x16.png">
    <link rel="manifest" href="./fav_index1/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>User Input with PHP : Street Name and Number</title>
  </head>
  <!--Header and Text-->
  <body>
    <center>
    <?php echo "<h1>User Input : Street Name and Number</h1>" ?>
    <?php echo "<h4>By: Julien Lamoureux</h4>" ?>
    <?php echo "<h4>Course: ICS20 Promgramming</h4>" ?>
    <br>
    <br>
    <!--User Input-->
    <?php echo "<h3>Please enter the following:</h3>" ?>
    <form action="./welcome.php" method="post" target="result">
      <label for="StN">Street Name</label>
      <input type="text" id="StN" placeholder="Street Name" name="StN"><br><br>
      <label for="StNu">Stree Number</label>
      <input type="text" id="StNu" placeholder="Street Number" name="StNu"><br><br>
      <input type="submit" value="Enter">
    </center>
			<br><br>	
    </form>
<div id="result"></div>
    <center>
      <!--Final Result of User Input-->
      <iframe id="result" name="result">
				Your address is <?php echo $_POST["StNu"]; ?> <?php echo $_POST["StN"]; ?>.
      </iframe>
    </center>
  </body>
</html>