<?php
include ('db_connect.php'); 
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.css">
	<link rel="stylesheet" href="css/paper.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript">
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({
        autoPlay: 3000,
        items : 4,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3],
        pagination : false
      });

    });


    $(document).ready(function() {
      $("#owl-demoo").owlCarousel({
        autoPlay: 3000,
        items : 6,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]
      });

    });
</script>
	<title>Игровой портал</title>
</head>
<body style="background:#dddddd;">

<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#" style="padding-left:0;">Brand</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#">Игры <span class="sr-only">(current)</span></a></li>
	        <li><a href="#">Софты</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Категория игр <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Гонки</a></li>
	            <li><a href="#">Стратегия</a></li>
	            <li><a href="#">Симуляторы</a></li>
	            <li><a href="#">Онлайн игры</a></li>
	            <li><a href="#">Шутеры</a></li>
	          </ul>
	        </li>
	      </ul>
	      <form class="navbar-form navbar-left">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Поиск">
	        </div>
	        <button type="submit" class="btn btn-default">Submit</button>
	      </form>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#">Регистрация</a></li>
	        <li><a href="#">Вход</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
</nav>
<div class="container" style="background:#fff;padding:0;margin-top:50px;">
	<div class="row" style="margin:0;position:relative;">
		<div class="col-lg-12" style="padding:0;">
			<ol class="breadcrumb" style="margin-bottom:0;">
			  <li><a href="#">Home</a></li>
			  <li><a href="#">Library</a></li>
			  <li class="active">Data</li>
			</ol>
				<div class="game-info">
					  <h3 class="media-heading" style="margin-left:10px;">Counter-Strike</h3>
					<div class="media">
					  <div class="media-left media-top">
					    <a href="#">
					      <img class="media-object" src="img/csgo-cover.jpg" alt="..." style="margin:10px;width:220px;height:320px;">
					    </a>
					    <div class="download-wrap">
						  <div class="download">
						    <a href="#" class="button-download">
						      Download
						      <span class="icon-wrap">
						        <i class="icon-download"></i>
						      </span>
						    </a>
						  </div>
						</div>
					  </div>
					  <div class="media-body" style="padding-top:10px;">
					    <table class="sis-treb">
					    	<tr>
					    		<td style="padding-right:15px;">Жанр:</td>
					    		<td>Action</td>
					    	</tr>
					    	<tr>
					    		<td style="padding-right:15px;">Год выпуска:</td>
					    		<td>2016</td>
					    	</tr>
					    	<tr>
					    		<td style="padding-right:15px;">Разработчик:</td>
					    		<td>Gearbox Software</td>
					    	</tr>
					    	<tr>
					    		<td style="padding-right:15px;">Издатель:</td>
					    		<td>2K Games</td>
					    	</tr>
					    	<tr>
					    		<td style="padding-right:15px;">Операционная система:</td>
					    		<td>Windows 7 x64, Windows 8 x64, Windows 10 x64</td>
					    	</tr>
					    	<tr>
					    		<td style="padding-right:15px;">Процессор:</td>
					    		<td>Intel i5-750 или AMD Phenom IIx4 945</td>
					    	</tr>
					    	<tr>
					    		<td style="padding-right:15px;">Оперативная память:</td>
					    		<td>6 Гб RAM</td>
					    	</tr>
					    	<tr>
					    		<td style="padding-right:15px;">Жесткий диск:</td>
					    		<td>30 Гб</td>
					    	</tr>
					    	<tr>
					    		<td style="padding-right:15px;">Видеокарта:</td>
					    		<td>AMD HD 6870 или NVIDIA GeForce GTX 460 с поддержкой PhysX и 1 Гб или лучше.</td>
					    	</tr>
					    </table>
					  </div>
					</div>
				</div><hr>
						<div id="owl-demo">
						  <div class="item"><img src="img/carousel.jpg" alt="Owl Image"></div>
						  <div class="item"><img src="img/carousel1.jpg" alt="Owl Image"></div>
						  <div class="item"><img src="img/carousel2.jpg" alt="Owl Image"></div>
						  <div class="item"><img src="img/carousel.jpg" alt="Owl Image"></div>
						  <div class="item"><img src="img/carousel1.jpg" alt="Owl Image"></div>
						  <div class="item"><img src="img/carousel2.jpg" alt="Owl Image"></div>
						  <div class="item"><img src="img/carousel.jpg" alt="Owl Image"></div>
						  <div class="item"><img src="img/carousel2.jpg" alt="Owl Image"></div>
						</div>
						<div class="opisanie">
							<h3>Описание к игре</h3>
							<p>Race as your favorite NASCAR Sprint Cup Series drivers across all 23 licensed NASCAR tracks in stunning HD with incredibly detailed environments.

	Get ready for the most fun you’ve had with a NASCAR game in years! Whether you’re a casual racer or die-hard sim fan, NASCAR Heat Evolution will adjust to your skill level with a brand new AI and Speed Rating system that applies the right amount of challenge for you.

	In addition to quick play races you can build your own team from the ground up, and race your way to the Sprint Cup Championship in Career mode. Plus, Championship mode allows you to compete in modified NASCAR season schedules, including the option to jump straight into the final 10 races of NASCAR’s Chase for the Cup playoff. Plus, you asked for them and we listened… Challenges are back! Relive or rewrite this season’s most memorable moments as the drivers who lived them.</p>
						</div>
						<hr style="margin-left:0;margin-right:0;">
						<div class="recomend">
							<h3>Рекомендуемые игры</h3>
							<div id="owl-demoo">
							  <div class="item">
							  	<div class="myitem">
									<div class="img">
										<img src="img/counter-strike.png">
									</div>
									<div class="item-info">
										<p>Counter-Strike</p>
									</div>
									<div class="item-cutinfo">
										<p>Лучшая версия Counter Strike на сегодняшний день</p>
									</div>
									<div class="item-version">
										<p>1.6</p>
									</div>
								</div>
							  </div>
							  <div class="item">
							  	<div class="myitem">
									<div class="img">
										<img src="img/counter-strike.png">
									</div>
									<div class="item-info">
										<p>Counter-Strike</p>
									</div>
									<div class="item-cutinfo">
										<p>Лучшая версия Counter Strike на сегодняшний день</p>
									</div>
									<div class="item-version">
										<p>1.6</p>
									</div>
								</div>
							  </div>
							  <div class="item">
							  	<div class="myitem">
									<div class="img">
										<img src="img/counter-strike.png">
									</div>
									<div class="item-info">
										<p>Counter-Strike</p>
									</div>
									<div class="item-cutinfo">
										<p>Лучшая версия Counter Strike на сегодняшний день</p>
									</div>
									<div class="item-version">
										<p>1.6</p>
									</div>
								</div>
							  </div>
							  <div class="item">
							  	<div class="myitem">
									<div class="img">
										<img src="img/counter-strike.png">
									</div>
									<div class="item-info">
										<p>Counter-Strike</p>
									</div>
									<div class="item-cutinfo">
										<p>Лучшая версия Counter Strike на сегодняшний день</p>
									</div>
									<div class="item-version">
										<p>1.6</p>
									</div>
								</div>
							  </div>
							  <div class="item">
							  	<div class="myitem">
									<div class="img">
										<img src="img/counter-strike.png">
									</div>
									<div class="item-info">
										<p>Counter-Strike</p>
									</div>
									<div class="item-cutinfo">
										<p>Лучшая версия Counter Strike на сегодняшний день</p>
									</div>
									<div class="item-version">
										<p>1.6</p>
									</div>
								</div>
							  </div>
							  <div class="item">
							  	<div class="myitem">
									<div class="img">
										<img src="img/counter-strike.png">
									</div>
									<div class="item-info">
										<p>Counter-Strike</p>
									</div>
									<div class="item-cutinfo">
										<p>Лучшая версия Counter Strike на сегодняшний день</p>
									</div>
									<div class="item-version">
										<p>1.6</p>
									</div>
								</div>
							  </div>
							  <div class="item">
							  	<div class="myitem">
									<div class="img">
										<img src="img/counter-strike.png">
									</div>
									<div class="item-info">
										<p>Counter-Strike</p>
									</div>
									<div class="item-cutinfo">
										<p>Лучшая версия Counter Strike на сегодняшний день</p>
									</div>
									<div class="item-version">
										<p>1.6</p>
									</div>
								</div>
							  </div>
							  <div class="item">
							  	<div class="myitem">
									<div class="img">
										<img src="img/counter-strike.png">
									</div>
									<div class="item-info">
										<p>Counter-Strike</p>
									</div>
									<div class="item-cutinfo">
										<p>Лучшая версия Counter Strike на сегодняшний день</p>
									</div>
									<div class="item-version">
										<p>1.6</p>
									</div>
								</div>
							  </div>
							</div>
						</div><hr style="margin-left:0;margin-right:0;">
			<div class="footer">
				<footer>
					<div class="col-lg-3">
						<ul class="footerul">
							<a href=""><li>dsmada</li></a>
							<a href=""><li>dsmada</li></a>
							<a href=""><li>dsmada</li></a>
							<a href=""><li>dsmada</li></a>
						</ul>
					</div>
					<div class="col-lg-3">
						<ul class="footerul">
							<a href=""><li>dsmada</li></a>
							<a href=""><li>dsmada</li></a>
							<a href=""><li>dsmada</li></a>
							<a href=""><li>dsmada</li></a>
						</ul>
					</div>
					<div class="col-lg-3">
						<ul class="footerul">
							<a href=""><li>dsmada</li></a>
							<a href=""><li>dsmada</li></a>
							<a href=""><li>dsmada</li></a>
							<a href=""><li>dsmada</li></a>
						</ul>
					</div>
					<div class="col-lg-3">
						<ul class="footerul">
							<a href=""><li>dsmada</li></a>
							<a href=""><li>dsmada</li></a>
							<a href=""><li>dsmada</li></a>
							<a href=""><li>dsmada</li></a>
						</ul>
					</div>
				</footer>
			</div>
		</div>
	</div>
</div>
<br>


</body>
</html>