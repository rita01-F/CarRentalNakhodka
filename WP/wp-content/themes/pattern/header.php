<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper" class="hfeed">
		<header id="header">
			<div id="header-container">
				<a class="logo" href="/">
					<img src="/wp-content/uploads/logo.png">
					<div class="text">
						<p class="name">Дюна Плюс</p>
						<p class="direction">Автопрокат</p>
					</div>
				</a>
				<nav id="menu">
					<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
				</nav>
				<div class="contact">
					<div class="phone">
						<div class="image-phone">
							<img src="/wp-content/uploads/phone.png">
						</div>
						<span>8(4236)77-77-96</span>
					</div>

					<div class="phone">
						<div class="image-phone">
							<img src="/wp-content/uploads/phone.png">
						</div>
						<span>8(984)149-53-81</span>
					</div>

					<div class="phone">
						<div class="image-phone">
							<img src="/wp-content/uploads/phone.png">
						</div>
						<span>8(924)333-13-04</span>
					</div>
					

				</div>
			</div>
		</header>
	<div id="container">