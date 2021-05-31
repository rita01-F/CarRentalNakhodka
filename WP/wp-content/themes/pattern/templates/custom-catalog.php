<?php
/**
 * Template Name: Каталог
 * Post Type: page
*/ 
?>
<?php get_header(); ?>
<main id="content">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="header">
			<h1 class="entry-title"><?php the_title(); ?></h1> 
		</header>	
		<div class="entry-content"> 
			<div class="auto">
				<img src="/wp-content/uploads/CarPhoto.png">
				<img src="/wp-content/uploads/CarPhoto.png">
				<img src="/wp-content/uploads/CarPhoto.png">
				<img src="/wp-content/uploads/CarPhoto.png">
				<img src="/wp-content/uploads/CarPhoto.png">
				
			</div>
						
		</div>
	</article>
</main>
<?php get_footer(); ?>