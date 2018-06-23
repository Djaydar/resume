<?php 

ini_set('error_reporting', 'E_ALL');
ini_set('display_errors', 'E_ALL');
ini_set('display_startup_errors', 'E_ALL');

$post_id = $_GET['post_id'];
if (!is_numeric($post_id)) exit();

require_once("header.php");
$post = get_post_by_id($post_id); 
?>

<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="page-header">
				<h1><?=$post['title']?></h1>
			</div>
			<hr>
			<div class="post_content" align="justify">
				<img src="<?=$post['image']?>" align="left" style="padding: 0 10px 10px 0" margin-left="-20px">
				<?=$post['content'] ?>

			</div>
		</div>
		<div class="col-md-3">
			<aside class="right_aside">
				<ul>
					<?php $categories = get_categories();?>

					<?php foreach ($categories as $category): ?>
						<li><a href="/category.php?id=<?=$category["id"]?>"><?=$category["title"]?></a></li>
					<?php endforeach ?>
				</ul>
			</aside>
		</div>
	</div>
</div>


<?php 
include_once 'footer.php';
?>