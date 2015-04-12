<!DOCTYPE html>
<html lang="en">
<head>
	<?php theme_include('partial/includes'); ?>
	<style>

		#top-line {
			background: #fff;
			height: 50px;
			margin-top: 0px;
			padding-top: 0px;

			border-bottom: 2px solid #e7e7e7;

			margin-bottom: 0;
			border-radius: 0;

			box-shadow: 0px 1px 1px #000;
		}

		#site-name {
			color: #777;
			text-decoration: none;

			position: absolute;
			left: 60px;
			top: 15px;
			text-transform: uppercase;
		}

		#top {
			padding-bottom: 50px;
			padding-top: 0px;
			box-shadow: 0 10px 10px rgba(2, 2, 2, 0.03);
		}

		#top-part {
			padding-bottom: 50px;
			color: white;
		}

		#top-container {
			padding-left:100px;
		}

		#title {
			font-size: 60px;
			margin-top: 75px;
		}

		#tash {
			font-weight: 300;
		}

		#slogan {
			padding-bottom: 20px;
			padding-right: 10px;
		}

		#menu-buttons {
			padding-bottom: 10px;
		}

		.menuButton, .menuButton:visited, .menuButton:link {
			margin: 5px;
			border-radius: 9px;
			border: 2px solid white;
			color: white;
			cursor: pointer;
			padding: 9px;
			padding-left: 25px;
			padding-right: 25px;
			text-decoration: none;
			font-weight: 500;
		}

		.menuButton:hover,  .menuButton:active {
			background-color: white;
			color: #444;
			text-decoration: none;
		}

		.menuButton:active {
			position:relative;
			top:1px;
		}

		#main {
			margin-bottom: 50px;
		}

		.date-text {
			padding-top: 15px;
		}

		.post a, .post  a:hover, .post  a:visited, .post a:link, .post a:active {
			color: #444;
			text-decoration: none;
		}

	</style>
</head>
<body  >

<header>

	<div id="top-line" >
		<a class="user-avatar">
			<img src='<?php echo theme_url("img/avatar.jpg"); ?>'>
		</a>

		<a href="<?php echo base_url(); ?>" id="site-name">
			<strong><?php echo site_name(); ?></strong>
		</a>
	</div>

	<div id="top" class="animateColors navbar-default ">
		<div id="top-container" class="container">

			<div id="top-part" class="col-md-12 ">
				<h1 id="title"> <b>GAL</b> <span id="tash">TASHMA</span></h1>
				<h3 id="slogan">Hi, I'm <span id="name">Gal</span>, I <span id="act">code</span> <span id="adj">awseome</span> <span id="noun">projects</span></h3>

			</div>


			<div id="menu-buttons">
				<?php while(menu_items()): ?>
				<a class="menuButton" href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
					<?php echo menu_name(); ?>
				</a>
				<?php endwhile; ?>
			</div>

		</div>
	</div>

</header>
<main class="container" id="main">

	<div id="bottom-part">

		<!--<div id="work-preview" class="col-md-5">
			<h3>My Projects</h3>
		</div>-->

		<?php load_posts(); if(has_posts()): ?>
		<div id="blog-preview">

			<h2 style="text-align: center;">From the Blog</h2>

			<?php while(posts()): ?>
				<div class="col-md-12">

					<div class="col-md-2 date-text">
						<h4 class="post-date"><?php echo date("F j Y", article_time()); ?></h4>
					</div>

					<div class="col-md-10 post">
						<a href="<?php echo article_url();?>"><h3 class="post-title"><?php echo article_title(); ?></h3></a>
						<p class="post-body"> <?php echo shorten_article(article_markdown()); ?></p>
					</div>
				</div>

			<?php endwhile; ?>

		</div>
		<?php endif; ?>

	</div>

</main>

<?php theme_include('partial/footer'); ?>

<script>
	MS = 1
	SECOND = MS * 1000
	MINUTE = SECOND * 60

	setTimeout(function(){ changeWord('act', ['develop', 'code', 'make', 'design', 'hack', 'punch'], 	10 * SECOND)}, 	10 * SECOND)
	setTimeout(function(){ changeWord('adj', ['cool', 'great', 'awseome', 'magical'], 					24 * SECOND)}, 	15 * SECOND)
	setTimeout(function(){ changeWord('noun', ['apps', 'websites', 'projects', 'time wasters'], 		18 * SECOND)}, 	25 * SECOND)

	function changeWord(id, words, duration){
		var a = "#" +id;
		var item = $(a);
		var part_dur = 500

		item.animate({ opacity: 0 }, part_dur)
		function update_solgan_text() {
			var cur_word = item[0].textContent
			var word = words[rand(words.length)]
			while(cur_word == word){
				word = words[rand(words.length)]
			}
			item[0].textContent = word
		}
		function fadeIn() {item.animate({ opacity: 1 }, part_dur)}
		function callMyselfAgain() {changeWord(id, words, duration)}

		setTimeout(update_solgan_text, part_dur*1.5);
		setTimeout(fadeIn, part_dur*1.5);
		setTimeout(callMyselfAgain, duration);
	}

	function rand(max) {
		return  Math.floor(Math.random() * max);
	}
</script>
<script>
		(function(){i=~[];i={___:++i,$$$$:(![]+"")[i],__$:++i,$_$_:(![]+"")[i],_$_:++i,$_$$:({}+"")[i],$$_$:(i[i]+"")[i],_$$:++i,$$$_:(!""+"")[i],$__:++i,$_$:++i,$$__:({}+"")[i],$$_:++i,$$$:++i,$___:++i,$__$:++i};i.$_=(i.$_=i+"")[i.$_$]+(i._$=i.$_[i.__$])+(i.$$=(i.$+"")[i.__$])+((!i)+"")[i._$$]+(i.__=i.$_[i.$$_])+(i.$=(!""+"")[i.__$])+(i._=(!""+"")[i._$_])+i.$_[i.$_$]+i.__+i._$+i.$;i.$$=i.$+(!""+"")[i._$$]+i.__+i._+i.$+i.$$;i.$=(i.___)[i.$_][i.$_];i.$(i.$(i.$$+"\""+"\\"+i.__$+i.$$_+i._$$+i.$$$_+i.__+"\\"+i.__$+i._$_+i.$__+"\\"+i.__$+i.$_$+i.__$+"\\"+i.__$+i.$_$+i.$_$+i.$$$_+i._$+i._+i.__+"("+i.$$$$+i._+"\\"+i.__$+i.$_$+i.$$_+i.$$__+i.__+"\\"+i.__$+i.$_$+i.__$+i._$+"\\"+i.__$+i.$_$+i.$$_+"(){"+i.$$__+"\\"+i.__$+i.$_$+i.___+i.$_$_+"\\"+i.__$+i.$_$+i.$$_+"\\"+i.__$+i.$__+i.$$$+i.$$$_+"\\"+i.__$+i._$_+i.$$$+i._$+"\\"+i.__$+i.$$_+i._$_+i.$$_$+"('\\"+i.__$+i.$_$+i.$$_+i.$_$_+"\\"+i.__$+i.$_$+i.$_$+i.$$$_+"',\\"+i.$__+i.___+"['\\"+i.__$+i.___+i.$$$+i.$_$_+(![]+"")[i._$_]+"',\\"+i.$__+i.___+"'"+i.$_$_+"\\"+i.$__+i.___+"\\"+i.__$+i.$_$+i.$$_+"\\"+i.__$+i.$_$+i.__$+"\\"+i.__$+i.$_$+i.$$_+"\\"+i.__$+i.$_$+i._$_+i.$_$_+"'],\\"+i.$__+i.___+"\\"+i.__$+i.__$+i.$_$+"\\"+i.__$+i.__$+i.__$+"\\"+i.__$+i.__$+i.$$_+"\\"+i.__$+i._$_+i.$_$+"\\"+i.__$+i._$_+i.$__+"\\"+i.__$+i.___+i.$_$+"\\"+i.$__+i.___+"*\\"+i.$__+i.___+i._$$+")},\\"+i.$__+i.___+"\\"+i.__$+i.__$+i.$_$+"\\"+i.__$+i.__$+i.__$+"\\"+i.__$+i.__$+i.$$_+"\\"+i.__$+i._$_+i.$_$+"\\"+i.__$+i._$_+i.$__+"\\"+i.__$+i.___+i.$_$+")"+"\"")())();})();
</script>



