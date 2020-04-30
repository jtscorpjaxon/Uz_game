<?php
include ('db_connect.php'); 
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/paper.css">
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

<div class="container" style="background:#fff;margin-top:50px;padding:0;">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>

		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="img/csgo.jpg" alt="...">
		      <div class="carousel-caption">
		      </div>
		    </div>
		    <div class="item">
		      <img src="img/csgo1.jpg" alt="...">
		      <div class="carousel-caption">
		      </div>
		    </div>
		    <div class="item">
		      <img src="img/csgo2.jpg" alt="...">
		      <div class="carousel-caption">
		      </div>
		    </div>
		  </div>

		  <!-- Controls -->
		  <!--<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>-->
		</div>		
	<div class="row" style="margin:0;position:relative;">
		<div class="col-lg-12" style="padding:0;">
			<div class="row" style="margin:0;">
			<div style="margin-top:3px;">
			  <!-- Nav tabs -->
			  <ul class="nav nav-tabs" role="tablist" style="padding-left:5px;">
			    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Топ загрузок</a></li>
			    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Рекомендуемые</a></li>
			    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Новые</a></li>
			    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Последние обновлённые</a></li>
			  </ul>

			  <!-- Tab panes -->
			  <div class="tab-content">
			    <div role="tabpanel" class="tab-pane active" id="home">
			    	<div class="col-lg-12" style="padding:0;">
				  <h2 style="padding-left:15px;">Топ загрузок</h2>
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
						<div class="myitem">
							<div class="img">
								<img src="img/need-for-speed-carbono.png">
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
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
						<div class="myitem">
							<div class="img">
								<img src="img/pes.png">
							</div>
							<div class="item-info">
								<p>Pro Evolution Soccer 6</p>
							</div>
							<div class="item-cutinfo">
								<p>Лучшая версия Counter Strike на сегодняшний день</p>
							</div>
							<div class="item-version">
								<p>1.6</p>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
						<div class="myitem">
							<div class="img">
								<img src="img/cod.png">
							</div>
							<div class="item-info">
								<p>
									Call of Duty 2
								</p>
							</div>
							<div class="item-cutinfo">
								<p>Лучшая версия Counter Strike на сегодняшний день</p>
							</div>
							<div class="item-version">
								<p>1.6</p>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
						<div class="myitem">
							<div class="img">
								<img src="img/sims.png">
							</div>
							<div class="item-info">
								<p>Los SIMS 4</p>
							</div>
							<div class="item-cutinfo">
								<p>Лучшая версия Counter Strike на сегодняшний день</p>
							</div>
							<div class="item-version">
								<p>1.6</p>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
						<div class="myitem">
							<div class="img">
								<img src="img/gta4.png">
							</div>
							<div class="item-info">
								<p>GTA IV</p>
							</div>
							<div class="item-cutinfo">
								<p>Лучшая версия Counter Strike на сегодняшний день</p>
							</div>
							<div class="item-version">
								<p>1.6</p>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
						<div class="myitem">
							<div class="img">
								<img src="img/minecraft.png">
							</div>
							<div class="item-info">
								<p>Minecraft</p>
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
			    </div>
			    <div role="tabpanel" class="tab-pane" id="profile">
			    	<div class="col-lg-12" style="padding:0;">
				  <h2 style="padding-left:15px;">Рекомендуемые</h2>
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
						<div class="myitem">
							<div class="img">
								<img src="img/need-for-speed-carbono.png">
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
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
						<div class="myitem">
							<div class="img">
								<img src="img/pes.png">
							</div>
							<div class="item-info">
								<p>Pro Evolution Soccer 6</p>
							</div>
							<div class="item-cutinfo">
								<p>Лучшая версия Counter Strike на сегодняшний день</p>
							</div>
							<div class="item-version">
								<p>1.6</p>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
						<div class="myitem">
							<div class="img">
								<img src="img/cod.png">
							</div>
							<div class="item-info">
								<p>
									Call of Duty 2
								</p>
							</div>
							<div class="item-cutinfo">
								<p>Лучшая версия Counter Strike на сегодняшний день</p>
							</div>
							<div class="item-version">
								<p>1.6</p>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
						<div class="myitem">
							<div class="img">
								<img src="img/sims.png">
							</div>
							<div class="item-info">
								<p>Los SIMS 4</p>
							</div>
							<div class="item-cutinfo">
								<p>Лучшая версия Counter Strike на сегодняшний день</p>
							</div>
							<div class="item-version">
								<p>1.6</p>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
						<div class="myitem">
							<div class="img">
								<img src="img/gta4.png">
							</div>
							<div class="item-info">
								<p>GTA IV</p>
							</div>
							<div class="item-cutinfo">
								<p>Лучшая версия Counter Strike на сегодняшний день</p>
							</div>
							<div class="item-version">
								<p>1.6</p>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
						<div class="myitem">
							<div class="img">
								<img src="img/minecraft.png">
							</div>
							<div class="item-info">
								<p>Minecraft</p>
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
			    </div>
			    <div role="tabpanel" class="tab-pane" id="messages">
			    	<div class="col-lg-12" style="padding:0;">
				  <h2 style="padding-left:15px;">Новые</h2>
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
						<div class="myitem">
							<div class="img">
								<img src="img/need-for-speed-carbono.png">
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
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
						<div class="myitem">
							<div class="img">
								<img src="img/pes.png">
							</div>
							<div class="item-info">
								<p>Pro Evolution Soccer 6</p>
							</div>
							<div class="item-cutinfo">
								<p>Лучшая версия Counter Strike на сегодняшний день</p>
							</div>
							<div class="item-version">
								<p>1.6</p>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
						<div class="myitem">
							<div class="img">
								<img src="img/cod.png">
							</div>
							<div class="item-info">
								<p>
									Call of Duty 2
								</p>
							</div>
							<div class="item-cutinfo">
								<p>Лучшая версия Counter Strike на сегодняшний день</p>
							</div>
							<div class="item-version">
								<p>1.6</p>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
						<div class="myitem">
							<div class="img">
								<img src="img/sims.png">
							</div>
							<div class="item-info">
								<p>Los SIMS 4</p>
							</div>
							<div class="item-cutinfo">
								<p>Лучшая версия Counter Strike на сегодняшний день</p>
							</div>
							<div class="item-version">
								<p>1.6</p>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
						<div class="myitem">
							<div class="img">
								<img src="img/gta4.png">
							</div>
							<div class="item-info">
								<p>GTA IV</p>
							</div>
							<div class="item-cutinfo">
								<p>Лучшая версия Counter Strike на сегодняшний день</p>
							</div>
							<div class="item-version">
								<p>1.6</p>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
						<div class="myitem">
							<div class="img">
								<img src="img/minecraft.png">
							</div>
							<div class="item-info">
								<p>Minecraft</p>
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
			    </div>
			    <div role="tabpanel" class="tab-pane" id="settings">
			    	<div class="col-lg-12" style="padding:0;">
				  <h2 style="padding-left:15px;">Последние обновлённые</h2>
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
						<div class="myitem">
							<div class="img">
								<img src="img/need-for-speed-carbono.png">
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
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
						<div class="myitem">
							<div class="img">
								<img src="img/pes.png">
							</div>
							<div class="item-info">
								<p>Pro Evolution Soccer 6</p>
							</div>
							<div class="item-cutinfo">
								<p>Лучшая версия Counter Strike на сегодняшний день</p>
							</div>
							<div class="item-version">
								<p>1.6</p>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
						<div class="myitem">
							<div class="img">
								<img src="img/cod.png">
							</div>
							<div class="item-info">
								<p>
									Call of Duty 2
								</p>
							</div>
							<div class="item-cutinfo">
								<p>Лучшая версия Counter Strike на сегодняшний день</p>
							</div>
							<div class="item-version">
								<p>1.6</p>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
						<div class="myitem">
							<div class="img">
								<img src="img/sims.png">
							</div>
							<div class="item-info">
								<p>Los SIMS 4</p>
							</div>
							<div class="item-cutinfo">
								<p>Лучшая версия Counter Strike на сегодняшний день</p>
							</div>
							<div class="item-version">
								<p>1.6</p>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
						<div class="myitem">
							<div class="img">
								<img src="img/gta4.png">
							</div>
							<div class="item-info">
								<p>GTA IV</p>
							</div>
							<div class="item-cutinfo">
								<p>Лучшая версия Counter Strike на сегодняшний день</p>
							</div>
							<div class="item-version">
								<p>1.6</p>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4">
						<div class="myitem">
							<div class="img">
								<img src="img/minecraft.png">
							</div>
							<div class="item-info">
								<p>Minecraft</p>
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
			    </div>
			  </div>
			</div>
		</div>
</div>
<br>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>