<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Динамический поиск</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="ui/jquery-ui.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container content">
<form class="form-horizontal" method="post" id="form">
	<div class="form-group">
		<div class="col-sm-6">
			<input type="text" class="form-control" id="search" name="search" placeholder="Поиск...">
			<button type="submit" id="submit" class="btn btn-primary">Найти</button>
		</div>
	</div>
</form>
</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="ui/jquery-ui.js"></script>

	<script>
$(function(){
	
	var langs = ["Пекин", "Токио", "Москва", "Дели", "Сеул", "Джакарта", "Бангкок", "Мехико", "Каир", "Лима"];

	$("#search").autocomplete({
		source: langs
	});

});
	</script>

</body>
</html>