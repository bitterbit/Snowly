<?php theme_include('partial/header'); ?>

<main class="container">
	<?php if(has_posts()): ?>
		<?php while(posts()): ?>
		<article>
			<header>
				<h1><a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a></h1>
				<div class="meta">
					<time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo date('d-m-Y H:i', article_time()); ?></time>, <?php echo article_author(); ?>
				</div>
			</header>

			<?php echo article_markdown(); ?>
			<p><a href="<?php echo article_url(); ?>" rel="article">more</a></p>
		</article>
		<?php endwhile; ?>
	<?php endif; ?>


        <?php if(has_pagination()): ?>
            <ul class="pager">
                <li class="next"><?php echo posts_next('Newer &rarr;'); ?></li>
		        <li class="previous"><?php echo posts_prev('&larr; Older'); ?></li>
            </ul>
        <?php endif; ?>
</main>

<?php theme_include('partial/footer'); ?>
