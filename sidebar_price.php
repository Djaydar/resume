<?php 
require_once("header.php");
require_once("include/database.php");
require_once("include/functions.php");


if(isset($_POST['service']) && isset($_POST['time']) && isset($_POST['price'])){


    // экранирования символов для mysql
	$service = htmlentities(mysqli_real_escape_string($link, $_POST['service']));
	$time = htmlentities(mysqli_real_escape_string($link, $_POST['time']));
	$price = htmlentities(mysqli_real_escape_string($link, $_POST['price']));

    // создание строки запроса
	$query ="INSERT INTO services VALUES(null, '$service', '$time', '$price')";

    // выполняем запрос
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
	if($result)
	{
		echo "<span style='color:blue;'>Статья добавлена</span>";
	}
    // закрываем подключение
	mysqli_close($link);
}
?>


<br>
<div class="container">
	<div class="form-group">
		<form method="POST">
			<h4>Добавление статьи:</h4>
			<br>
			<input type="text" name="service" value="" class="form-control" placeholder="Введите название услуги" required>
			<br>
			<input type="text" name="time" class="form-control" placeholder="Введите время" required>
			<br>
			<input type="text" name="price" class="form-control" placeholder="Введите цену" required>
			<br>
			<input type="submit" class="btn btn-success" value="Сохранить">
		</form>
	</div>
</div>

<?php
require_once("footer.php");
?>