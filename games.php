<?php
include ('db_connect.php'); 
?>
<!DOCTYPE HTML>
<html><head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/paper.css">
<title>Игровой портал</title>
</head><body style="background: #333;">
<!-- nav bar-->
<?php include("blocks/navbar.php"); ?>

<!-- WRAPPER -->
<div class="container">
  <div class="row papers">
  <?php include("blocks/left-side.php"); ?>

	<?php include("blocks/games-plain.php"); ?>
  </div>
</div>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>