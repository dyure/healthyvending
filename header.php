<div class="menu_container_out">
	<div class="menu_container_in">
		<div class="menu_left"><?php wp_nav_menu('menu=left'); ?></div>
		<div class="menu_logo">
			<a href="<?php echo get_home_url(); ?>">
				<img src="https://healthyvending.ru/wp-content/uploads/2020/12/logo-1.png" width="150" height="27" alt="<?php the_title(); ?>">
			</a>
		</div>
		<div class="menu_right"><?php wp_nav_menu('menu=right'); ?></div>
	</div>
</div>

<header class="mobile">
	<a class="logo" href="<?php echo get_home_url(); ?>">
		<img src="https://healthyvending.ru/wp-content/uploads/2020/12/logo-1.png" width="145" height="26" alt="<?php the_title(); ?>">
	</a>
	<nav>
		<input type="checkbox" id="responsive_menu" />
		<?php wp_nav_menu('menu=mobile'); ?>
		<label for="responsive_menu" class="open">
			<img src="https://healthyvending.ru/wp-content/uploads/2020/12/bars.png" width="32" height="21" alt="">
		</label>
	</nav>
</header>
