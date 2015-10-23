<!DOCTYPE html>
<html lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Веб-приложения на PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<div class="container-fluid">
	<div class="wrap">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
				    <div class="panel-body">
				    	<h4 class="text-center">Определить площадь треугольника , при условии, что указаны величины 3 его сторон</h4>
				    	<img src="img/triangle.PNG" class="img-thumbnail triangle">
						<form action="result.php" method="post">
						  <div class="form-group">
						    <div class="input-group">
						      <div class="input-group-addon">A:</div>
						      <input type="text" class="form-control" name="a" required>
						    </div>
						    <div class="input-group">
						      <div class="input-group-addon">B:</div>
						      <input type="text" class="form-control" name="b" required>
						    </div>
						    <div class="input-group">
						      <div class="input-group-addon">C:</div>
						      <input type="text" class="form-control" name="c" required>
						    </div>
						  </div>
						  <input type="text" name="id" value="2" hidden>
						  <button type="submit" class="btn btn-primary pull-right">Посчитать</button>
						</form>
						<a href="index.php" class="btn btn-link">На главную</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>