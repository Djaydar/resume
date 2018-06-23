<?php 
ini_set('error_reporting', 'E_ALL');
ini_set('display_errors', 'E_ALL');
ini_set('display_startup_errors', 'E_ALL');
require_once("header.php");
?>




<div class="container">
	<div class="row">
		<div class="col-md-9">

			<div>
				<h1>Все записи:</h1>
			</div>

			<?php
			$posts = get_posts();
			?>

			<?php foreach ($posts as $post):?>

				<div class="row">
					<div class="col-md-3">
						<a href="#" class="thumbnail">
							<img src="<?=$post['image']?>" alt="">
						</a>
					</div>
					<div class="col-md-9">
						<h4><a href="/post.php?post_id=<?=$post['id'] ?>"><?=$post['title']?></a></h4>
						<p>
							<?=mb_substr($post['content'], 0, 128, 'UTF-8').'...'?>
						</p>
						<p><a class="btn btn-info btn-sm" href="/post.php?post_id=<?=$post['id'] ?>">Читать полностью</a></p>
						<br/>
					</div>
				</div>
				<hr>
			<?php endforeach; ?>


		</div>
		<div class="col-md-3">
			<aside class="right_aside">
				<ul>
					<?php $categories = get_categories(); ?>
					
					<?php foreach ($categories as $category): ?>
						<li><a href="/category.php?id=<?=$category["id"]?>"><?=$category["title"]?></a></li>
					<?php endforeach ?>

				</ul>
			</aside>
		</div>
		
	</div>
</div>




<?php
require_once("footer.php");
?>