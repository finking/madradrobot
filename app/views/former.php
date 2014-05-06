<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Страница с формой</title>
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
						<li class="active"><a href="#">Страница с формой</a></li>
						<li><a href="#">Страница с просмотром</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<h4>Здесь Должно быть название формы!</h4>
			<?=
			Form::open(array(
				'action' => 'action',
				'class'  => 'form-horizontal',
				'role'   => 'form',
				'method' => 'post',
			)); ?>
			<div class="form-group">
				<label for="inputName" class="col-sm-3 control-label">Название текста</label>

				<div class="col-sm-8">
					<?=
					Form::input('text', 'name', '', array(
						'placeholder' => 'Напишите название текста',
						'class'       => 'form-control',
						'id'          => 'inputName',
						'required'    => 'required',
					));
					?>
				</div>
			</div>
			<div class="form-group">
				<label for="inputAbout" class="col-sm-3 control-label">Какой-нибудь текст</label>

				<div class="col-sm-8">
					<?=
					Form::textarea('about', '', array(
						'placeholder' => 'Расскажите что-нибудь',
						'class'       => 'form-control',
						'id'          => 'inputAbout',
						'required'    => 'required',
						'rows'        => '5',
					));
					?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-6 col-sm-2">
					<?=
					Form::button('Сохранить', array(
						'type'  => 'submit',
						'class' => 'btn btn-success',
					));
					?>
				</div>
			</div>
			<?= Form::close(); ?>
		</div>
	</div>
</div>
</body>
</html>