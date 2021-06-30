<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Main Layout Section -->
<div class="slideshow-container">

	<div class="mySlides fade">
		<!-- <div class="numbertext">1 / 3</div> -->
		<!-- <img src="images/slider2.jpg" style="width:100%"> -->
		<!-- <div class="text">Caption Text</div> -->
	</div>

	<!-- Hi! Section --->
	<div class="container">
		<div class="menu-menu-1-container">
			<ul id="menu-menu-1" class="menu">
				<h1 style="font-weight: bold; font-size: 50px; color: goldenrod;" ;>Hej! velkommen søde elskere!</h1>
			</ul>
		</div>
	</div>



	<!-- Best Sellers Section --->
	<div class="container">
		<div class="menu-menu-1-container">
			<ul id="menu-menu-1" class="menu">
				<h1 style="font-weight: bold;" ;>/ BEST SELLERS</h1>
			</ul>
		</div>
	</div>

	<hr />

	<!-- #masthead -->
	<div id="content" class="site-content">
		<div id="primary" class="content-area column full">
			<main id="main" class="site-main">
				<div class="grid portfoliogrid">

					<article class="hentry">
						<header class="entry-header">
							<div class="entry-thumbnail">
								<a href="portfolio-item.html"><img src="assets/images/cookie1.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="p1" /></a>
							</div>
							<h2 class="entry-title"><a href="portfolio-item.html" rel="bookmark">Chocroissant</a></h2>
							<a class='portfoliotype' href='portfolio-category.html'>Chocroissant is a buttery with chocolate, crescent-shaped French pastry</a>
							<!-- <a class='portfoliotype' href='portfolio-category.html'>summer</a>
		<a class='portfoliotype' href='portfolio-category.html'>woman</a>
		<a class='portfoliotype' href='portfolio-category.html'>yellow</a> -->
						</header>
					</article>

					<article class="hentry">
						<header class="entry-header">
							<div class="entry-thumbnail">
								<a href="portfolio-item.html"><img src="assets/images/cookie2.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="p1" /></a>
							</div>
							<h2 class="entry-title"><a href="portfolio-item.html" rel="bookmark">Premium Crossants</a></h2>
							<a class='portfoliotype' href='portfolio-category.html'>Premium croissants are light, flaky, and delicately sweet</a>
							<!-- <a class='portfoliotype' href='portfolio-category.html'>hat</a>
		<a class='portfoliotype' href='portfolio-category.html'>woman</a>
		<a class='portfoliotype' href='portfolio-category.html'>yellow</a> -->
						</header>
					</article>

					<article class="hentry">
						<header class="entry-header">
							<div class="entry-thumbnail">
								<a href="portfolio-item.html"><img src="assets/images/cookie3.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="p1" /></a>
							</div>
							<h2 class="entry-title"><a href="portfolio-item.html" rel="bookmark">Dolton Bomb</a></h2>
							<a class='portfoliotype' href='portfolio-category.html'>Dolton Bomb is an Italian filled doughnut and is eaten as a snack food and dessert</a>
							<!-- <a class='portfoliotype' href='portfolio-category.html'>summer</a>
		<a class='portfoliotype' href='portfolio-category.html'>woman</a>
		<a class='portfoliotype' href='portfolio-category.html'>yellow</a> -->
						</header>
					</article>

					<article class="hentry">
						<header class="entry-header">
							<div class="entry-thumbnail">
								<a href="portfolio-item.html"><img src="assets/images/cookie4.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="p1" /></a>
							</div>
							<h2 class="entry-title"><a href="portfolio-item.html" rel="bookmark">Rainbow Cake</a></h2>
							<a class='portfoliotype' href='portfolio-category.html'>Rainbow Cake is a form of sweet food made from flour, sugar, and other ingredients, that is made using rainbow colors</a>
							<!-- <a class='portfoliotype' href='portfolio-category.html'>pink</a>
		<a class='portfoliotype' href='portfolio-category.html'>woman</a>
		<a class='portfoliotype' href='portfolio-category.html'>yellow</a> -->
						</header>
					</article>

					<article class="hentry">
						<header class="entry-header">
							<div class="entry-thumbnail">
								<a href="portfolio-item.html"><img src="assets/images/cookie5.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="p1" /></a>
							</div>
							<h2 class="entry-title"><a href="portfolio-item.html" rel="bookmark">Banana Pie</a></h2>
							<a class='portfoliotype' href='portfolio-category.html'>Banana Pie is an old-fashioned pie that everyone loves</a>
							<!-- <a class='portfoliotype' href='portfolio-category.html'>hat</a>
		<a class='portfoliotype' href='portfolio-category.html'>summer</a>
		<a class='portfoliotype' href='portfolio-category.html'>yellow</a> -->
						</header>
					</article>

					<article class="hentry">
						<header class="entry-header">
							<div class="entry-thumbnail">
								<a href="portfolio-item.html"><img src="assets/images/cookie6.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="p1" /></a>
							</div>
							<h2 class="entry-title"><a href="portfolio-item.html" rel="bookmark">Cheese Pie</a></h2>
							<a class='portfoliotype' href='portfolio-category.html'>Cheee pie is a baked dish which is contains a filling of sweet cheese</a>
							<!-- <a class='portfoliotype' href='portfolio-category.html'>hat</a>
		<a class='portfoliotype' href='portfolio-category.html'>woman</a>
		<a class='portfoliotype' href='portfolio-category.html'>summer</a> -->
						</header>
					</article>

				</div>

				<div class="container">
					<div class="menu-menu-1-container">
						<br />
						<ul id="menu-menu-1" class="menu">
							<a class="order-button" href="<?= base_url('/shop');  ?>" style="color: black;">ORDER NOW</a>
						</ul>
						<br />
					</div>
				</div>
				<!-- .grid -->

				<!-- <nav class="pagination">
	<span class="page-numbers current">1</span>
	<a class="page-numbers" href="#">2</a>
	<a class="next page-numbers" href="#">Next »</a>
	</nav>
	<br/> -->

			</main>
			<!-- #main -->
		</div>
		<!-- #primary -->
	</div>
	<!-- #content -->
</div>
<!-- .container -->
<?= $this->endSection('content'); ?>