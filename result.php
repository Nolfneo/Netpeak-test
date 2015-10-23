<?php
$link = $_POST['id'];//откуда вызов скрипта с page-1 или page-2
$back = "page-".$link.".php";
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

function getTriangle($a,$b,$c,$link){

	if($link==1){

		if( ( !is_numeric($a) && !empty($a) ) || ( !is_numeric($b) && !empty($b) ) || ( !is_numeric($c) && !empty($c) ) ){

			return '<div class="alert alert-danger" role="alert">Введено строковое значение!</div>';

		}else{

			if( empty($a) && !empty($b) && !empty($c) ){

				if($c>$b){

					$a = sqrt( pow($c, 2) - pow($b, 2) );	

					$a = round($a, 2);

					return '<div class="alert alert-success" role="alert">Ответ: A = '.$a.'</div>';

				}elseif($c=$b){

					return '<div class="alert alert-success" role="alert">Ответ: A = 0 Триугольник не существует</div>';

				}else{

					return '<div class="alert alert-danger" role="alert">Гипетенуза не может быть меньше катета!</div>';

				}

			}elseif( empty($b) && !empty($a) && !empty($c) ){

				if($c>$a){

					$b = sqrt( pow($c, 2) - pow($a, 2) );	

					$b = round($b, 2);

					return '<div class="alert alert-success" role="alert">Ответ: B = '.$b.'</div>';

				}elseif($c=$a){

					return '<div class="alert alert-success" role="alert">Ответ: B = 0 Триугольник не существует</div>';

				}else{

					return '<div class="alert alert-danger" role="alert">Гипетенуза не может быть меньше катета!</div>';

				}

			}elseif( empty($c) && !empty($a) && !empty($b) ){

				$c = sqrt( pow($a, 2) + pow($b, 2) );

				$c = round($c, 2);	

				return '<div class="alert alert-success" role="alert">Ответ: C = '.$c.'</div>';

			}else{

				return '<div class="alert alert-danger" role="alert">Указано не верное количество сторон!</div>';

			}

		}

	}elseif($link==2){

		if( ( !is_numeric($a) && !empty($a) ) || ( !is_numeric($b) && !empty($b) ) || ( !is_numeric($c) && !empty($c) ) ){

			return '<div class="alert alert-danger" role="alert">Введено строковое значение!</div>';

		}elseif( !isset($a) || !isset($b) || !isset($c) ){

			return '<div class="alert alert-danger" role="alert">Не все поля заполнены!</div>';

		}elseif( ($a < $c + $b) && ($c < $b + $a) && ($b < $a + $c)  ){

			$p = ($a + $b + $c) / 2; 

			$S = sqrt( $p * ( $p - $a ) * ( $p - $b ) * ( $p - $c ) );

			$S = round($S, 2);

			return '<div class="alert alert-success" role="alert">Ответ: S = '.$S.'</div>';

		}else{

			return '<div class="alert alert-danger" role="alert">Треугольник не существует!</div>';

		}

	}else{

		return '<div class="alert alert-danger" role="alert">Страница вызвана из неоткуда!</div>';

	}
}
?>
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
				    	<?= getTriangle($a,$b,$c,$link)?>
						<a href="<?= $back?>" class="btn btn-danger pull-right">Назад</a>
						<a href="index.php" class="btn btn-link">На главную</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>