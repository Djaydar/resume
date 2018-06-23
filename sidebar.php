<?php 
require_once("header.php");
require_once("include/database.php");
require_once("include/functions.php");


if(isset($_POST['title']) && isset($_POST['image']) && isset($_POST['content']) && isset($_POST['datetime']) && isset($_POST['category_id'])){


    // экранирования символов для mysql
	$title = htmlentities(mysqli_real_escape_string($link, $_POST['title']));
	$image = htmlentities(mysqli_real_escape_string($link, $_POST['image']));
	$content = htmlentities(mysqli_real_escape_string($link, $_POST['content']));
	$datetime = htmlentities(mysqli_real_escape_string($link, $_POST['datetime']));
	$category_id = htmlentities(mysqli_real_escape_string($link, $_POST['category_id']));

    // создание строки запроса
	$query ="INSERT INTO posts VALUES(null, '$title', '$image', '$content', '$datetime', '$category_id')";

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
			<input type="text" name="title" value="" class="form-control" placeholder="Введите название статьи" required>
			<br>
			<input type="text" name="image" class="form-control" placeholder="Картинка">
			<br>
			<textarea name="content" class="form-control" placeholder="Поле для статьи" id="" cols="30" rows="10"></textarea>
			<br>
			<br>
			<input type="datetime-local" name="datetime" placeholder="Дата">
			<br>
			<br>
			<input type="text" name="category_id" class="form-control" placeholder="Категория">
			<br>
			<input type="submit" class="btn btn-success" value="Сохранить">
		</form>
	</div>
</div>

<?php
require_once("footer.php");
?>