<!DOCTYPE html>

<html lang="en">
<head>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<meta charset="UTF-8">
	<title>MyWebsite</title>
	<?php wp_head(); ?>
</head>

<body>
	<div class='wrapper'> 
		<div id='header'>
			<a id='logo' href="#">
				<h1 class='websitename'>XDesign</h1>
			</a>
			<?php 
				$args =  array(
					'theme_location' => 'nav-menu',
					'container' => false,
					'menu_class' => 'noliststyle',
					'menu_id' => 'nav'
				);
				wp_nav_menu($args);
			?>
		</div>
		<div class='showcase'>
			<div id='slider'>
				<img src="http://g-ecx.images-amazon.com/images/G/01/img15/pet-products/small-tiles/23695_pets_vertical_store_dogs_small_tile_8._CB312176604_.jpg" alt="" />
				<img src="https://www.petfinder.com/wp-content/uploads/2012/11/122163343-conditioning-dog-loud-noises-632x475.jpg" alt="" />
				<img src="http://static.ddmcdn.com/gif/earliest-dogs-660x433-130306-akita-660x433.jpg" alt="" />
			</div>
			<ul  class='noliststyle'>
				<li class='showcasehead'>Example Sites</li>
				<li class='showcasetext'>blah</li>
				<li class='showcasetext'>blah</li>
				<li class='showcasetext'>blah</li>
			</ul>
		</div>
	</div>
	<?php wp_footer(); ?>
</body>
</html>