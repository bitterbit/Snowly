<footer>
	<div class="container-wide">
		<div class="row">
			<div class="col-md-5">
				<p>Copyrights by <?php echo site_name(); ?>. <br> Theme by <a href="http:\/\/danoxide.pl">Piotr Filipek</a>.</p>
			</div>

			<div class="col-md-5">
				<nav>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo rss_url(); ?>">RSS</a></li>
						<li><a href="<?php echo twitter_url(); ?>">@<?php echo twitter_account(); ?></a></li>
						<li class="active"><a href="<?php echo base_url('admin'); ?>" title="Manage your site!">Admin area</a></li>
						<li class="active"><a href="<?php echo base_url(); ?>" title="Return to my website!">Home</a></li>
					</ul>
				</nav>
			</div>
			<div class=col-md-2>
				<a href="https://mixpanel.com/f/partner"><img width=75 src="//cdn.mxpnl.com/site_media/images/partner/badge_light.png" alt="Mobile Analytics" /></a>
			</div>

		</div>
	</div>
</footer>

<section id="search">
	<div class="cell">
		<div class="cell-inner">
			<form action="<?php echo search_url(); ?>" method="post">
				<input type="text" name="term" class="input-lg col-md-12" placeholder="Type here to search...">
			</form>
		</div>
	</div>

	<button class="btn btn-default close">&times;</button>
</section>

<script src="<?php echo theme_url('js/jquery.min.js'); ?>"></script>
<script src="<?php echo theme_url('js/bootstrap.min.js'); ?>"></script>
<script>
	$(document).ready(function(){
		var searchWindow = $('#search');
		$('a[data-target=#search]').click(function(event){
			event.preventDefault();
			searchWindow.css('display', 'table');
		});

		$('button.close').click(function(){
			$('#search').css('display', 'none');
		});
	});

	(function(){
		items = document.getElementsByClassName('animateColors')
		console.log(items, items.legnth);
		for (i=0; i < items.length; i++) {
			var item = items[i];
			item.className += " animateColors" + Math.floor((Math.random()*5)+1);
			console.log(item, item.className);
		}
	})();
</script>
</body>
</html>
