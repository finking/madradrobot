<?php
/**
 * @var array $message1
 * @var array $message2
 * @var array $message3
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Страница сообщений</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" href="//bootswatch.com/lumen/bootstrap.min.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

	<![endif]-->
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="navbar navbar-default">
				<div class="navbar-header">

					<a class="navbar-brand" href="#">RedMadRobot</a>
				</div>
				<div class="navbar-collapse collapse navbar-responsive-collapse">
					<ul class="nav navbar-nav">
						<li ><a href="/">Главная</a></li>
						<li><a href="former">Страница с формой</a></li>
						<li class="active"><a href="view">Страница с просмотром</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<h3>Последние 3 сообщения:</h3>

					<p><b><?=$message1['name_message']?></b></p>
					<p><?=$message1['body_message']?></p>
				<hr>

					<p><b><?=$message2['name_message']?></b></p>
					<p><?=$message2['body_message']?></p>
				<hr>
					<p><b><?=$message3['name_message']?></b></p>
					<p><?=$message3['body_message']?></p>
		</div>
	</div>
</div>
</body>
</html>