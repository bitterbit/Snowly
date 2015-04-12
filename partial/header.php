<!DOCTYPE html>
<html lang="en">
<head>
	<?php theme_include('partial/includes'); ?>
</head>
<body>

<header id="top" class="animateColors">
	<nav class="navbar navbar-default">
		<div class="navbar-header">
			<?php if(has_menu_items()): ?>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-menu">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<?php endif; ?>

				<a class="user-avatar">
					<img src='<?php echo theme_url("img/avatar.jpg"); ?>'>
        		</a>

			<a href="<?php echo base_url(); ?>" class="navbar-brand">
				<strong><?php echo site_name(); ?></strong>
			</a>
		</div>

		<?php if(has_menu_items()): ?>
		<div class="collapse navbar-collapse" id="navbar-collapse-menu">
			<ul class="nav navbar-nav navbar-right">
				<?php while(menu_items()): ?>
				<li><a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>"><?php echo menu_name(); ?></a></li>
				<?php endwhile; ?>
				<li><a href="#" title="Search..." data-target="#search"><span class="glyphicon glyphicon-search"></span></a></li>
			</ul>
		</div>
		<?php endif; ?>
	</nav>
</header>
