<?php theme_include('partial/header'); ?>

<main class="container">
	<article>
		<h1>Page not found</h1>
		<p>Unfortunately, the page <code>/<?php echo htmlspecialchars(current_url()); ?></code> could not be found. Your best bet is either to try the <a href="<?php echo base_url(); ?>">homepage</a>, try <a href="#search">searching</a>, or go and cry in a corner (although I don’t recommend the latter).</p>
	</article>
</main>

<?php theme_include('partial/footer'); ?>