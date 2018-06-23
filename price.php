<?php 
require_once("header.php");
?>

<div class="container">
	<h1>Цены на наши услуги</h1>
	<table class="table">
		<thead class="thead-inverse">
			<tr>
				<th>#</th>
				<th>Услуга</th>
				<th>Время ремонта(час)</th>
				<th>Цена(руб.)</th>
			</tr>
		</thead>
		<tbody>
			<tr>

				<?php 
				global $link;
				$sql = 'SELECT * FROM `services`';
				$result=mysqli_query($link, $sql);

				while ($row=mysqli_fetch_array($result))

{ // выводим данные

	echo "<tr>\n\t<td>".$row["id"]."</td>"."\n\t"."<td>"."".$row["service"]."

	</td>"."\n\t"."<td>"."".$row["time"]."</td>"."\n\t"."<td>"."".$row

	["price"]."</td>"."</tr>"."\n";

}

?>


</tr>
</tbody>
</table>
</div>


<?php 
require_once("footer.php")
?>