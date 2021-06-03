<?php
/**
 * Template Name: Каталог
 * Post Type: page
*/ 
?>
<?php
	require (dirname(__DIR__).'/includes/db.php');

    $cars = R::find('cars');

    $reserves = R::find('reserve');
?>
<?php get_header(); ?>
<main id="content">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="header">
			<h1 class="entry-title"><?php the_title(); ?></h1> 
		</header>	
		<div class="entry-content"> 
			<div class="auto">
				<?php
				
					if(!count($cars))
						{
							echo 'No cars';
						}
						else
						{
							foreach ($cars as $item)
							{
								$on = $item->auto_trans == 'on' ? 'v' : 'x';

								$status = $item->status;
								$status_color = $status == 0 ? 'green' : 'red';
								$status_reserve = $status == 0 ? 'Reserve' : 'Taken';
								$status_href = $status == 0 ? 'href="/car_reserv.php?car='. $item->id .'"': '';

								echo '
									<div>
										<img src="/wp-content/uploads/CarPhoto.png">
										<div class="name-car">
												'. $item->car_name .' ('. $item->manufacture_year .' г.)
										</div>
										<div class="about-car">
											Статус: '. $status_reserve .' <br>
											Привод: '. $item->drive .' <br>
											Объем двигателя: '. $item->trunk .' л<br>
											Цена: '. $item->price .' рублей / сутки <br>
										</div>
										<div class="button">
											<a>
												<div>Забронировать</div>
											</a>
										</div>						
									</div> 
								';
							}
						}
				
				?>
			</div>
						
		</div>
	</article>
</main>
<?php get_footer(); ?>