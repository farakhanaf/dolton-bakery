<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dolton Bakery</title>
	<link rel="shortcut icon" href="assets/images/dolton-bakery-profile.jpg" />
	<link rel='stylesheet' href='assets/css/woocommerce-layout.css' type='text/css' media='all' />
	<link rel='stylesheet' href='assets/css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)' />
	<link rel='stylesheet' href='assets/css/woocommerce.css' type='text/css' media='all' />
	<link rel='stylesheet' href='assets/css/font-awesome.min.css' type='text/css' media='all' />
	<link rel='stylesheet' href='assets/css/style.css' type='text/css' media='all' />
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500,700%7CHerr+Von+Muellerhoff:400,500,700%7CQuattrocento+Sans:400,500,700' type='text/css' media='all' />
	<link rel='stylesheet' href='assets/css/easy-responsive-shortcodes.css' type='text/css' media='all' />
</head>

<body class="archive post-type-archive post-type-archive-product woocommerce woocommerce-page">
	<div id="page">
		<div class="container">
			<header id="masthead" class="site-header">
				<div class="site-branding">
					<img src="assets/images/slider4.jpg" style="width:100%">
					<p class="site-description" style="color: pink; font-size: 30px;">It's love in every bites</p>
				</div>
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle">Menu</button>
					<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
					<div class="menu-menu-1-container" style="font-size: 17px;">
						<ul id="menu-menu-1" class="menu">
							<li><a href="<?= base_url('/');  ?>">Home</a></li>
							<li><a href="<?= base_url('/about');  ?>">About</a></li>
							<li><a href="<?= base_url('/shop');  ?>">Shop</a></li>
							<li><a href="<?= base_url('/blog');  ?>">Blog</a></li>
							<!-- <li><a href="elements.html">Elements</a></li>
					<li><a href="#">Pages</a>
					<ul class="sub-menu">
						<li><a href="portfolio-item.html">Portfolio Item</a></li>
						<li><a href="blog-single.html">Blog Article</a></li>
						<li><a href="shop-single.html">Shop Item</a></li>
						<li><a href="portfolio-category.html">Portfolio Category</a></li>
					</ul> -->
							</li>
							<li><a href="<?= base_url('/contact');  ?>">Contact</a></li>
						</ul>
					</div>
				</nav>
			</header>
			<!-- #masthead -->
			<div id="content" class="site-content">
				<div id="primary" class="content-area column full">
					<main id="main" class="site-main" role="main">
						<p class="woocommerce-result-count">
							Showing 1–8 of 12 results
						</p>
						<form class="woocommerce-ordering" method="get">
							<select name="orderby" class="orderby">
								<option value="menu_order" selected="selected">Default sorting</option>
								<option value="popularity">Sort by popularity</option>
								<option value="rating">Sort by average rating</option>
								<option value="date">Sort by newness</option>
								<option value="price">Sort by price: low to high</option>
								<option value="price-desc">Sort by price: high to low</option>
							</select>
						</form>
						<ul class="products">

							<li class="first product">
								<a href="shop-single.html">
									<span class="onsale">Sale!</span>
									<img src="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/10/2015/09/10175658/j4-520x520.jpg" alt="">
									<h3>Cool Fedora</h3>
									<span class="price"><span class="amount">$34.00</span></span>
								</a><a href="#" class="button">Add to cart</a>
							</li>

							<li class="product">
								<a href="shop-single.html">
									<img src="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/10/2015/09/10175658/j10-520x780-520x600.jpg" alt="">
									<h3>Beige Blouse</h3>
									<span class="price"><span class="amount">$66.00</span></span>
								</a><a href="#" class="button">Add to cart</a>
							</li>

							<li class="product">
								<a href="shop-single.html">
									<img src="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/10/2015/09/10175658/j1-520x780-520x600.jpg" alt="">
									<h3>Black Jacket</h3>
									<span class="price"><span class="amount">$125.00</span></span>
								</a><a href="#" class="button">Add to cart</a>
							</li>

							<li class="last product">
								<a href="shop-single.html">
									<img src="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/10/2015/09/10175658/j9-520x780-520x600.jpg" alt="">
									<h3>Brown Jacket</h3>
									<span class="price"><span class="amount">$28.00</span></span>
								</a><a href="#" class="button">Add to cart</a>
							</li>

							<li class="first product">
								<a href="shop-single.html">
									<img src="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/10/2015/09/10175658/j12-520x668-520x600.jpg" alt="">
									<h3>Gray Blouse</h3>
									<span class="price"><span class="amount">$15.00</span></span>
								</a><a href="#" class="button">Add to cart</a>
							</li>

							<li class="product">
								<a href="shop-single.html">
									<img src="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/10/2015/09/10175658/f11-520x755-520x600.jpg" alt="">
									<h3>Male Bag</h3>
									<span class="price"><span class="amount">$16.00</span></span>
								</a><a href="#" class="button">Add to cart</a>
							</li>

							<li class="product">
								<a href="shop-single.html">
									<img src="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/10/2015/09/10175658/j6-520x779-520x600.jpg" alt="">
									<h3>Hugo Jeans</h3>
									<span class="price"><span class="amount">$36.00</span></span>
								</a><a href="#" class="button">Add to cart</a>
							</li>

							<li class="last product">
								<a href="shop-single.html">
									<img src="http://s3.amazonaws.com/caymandemo/wp-content/uploads/sites/10/2015/09/10175658/j2-520x780-520x600.jpg" alt="">
									<h3>Male T-Shirt</h3>
									<span class="price"><span class="amount">$49.00</span></span>
								</a><a href="#" class="button">Add to cart</a>
							</li>

						</ul>
						<nav class="woocommerce-pagination">
							<ul class="page-numbers">
								<li><span class="page-numbers current">1</span></li>
								<li><a class="page-numbers" href="#">2</a></li>
								<li><a class="next page-numbers" href="#">→</a></li>
							</ul>
						</nav>
					</main>
					<!-- #main -->
				</div>
				<!-- #primary -->
			</div>
			<!-- #content -->
		</div>
		<!-- .container -->
		<footer id="colophon" class="site-footer" style="background-color: white;">
			<div class="container">
				<div class="site-info">
					<h1 style="font-family: 'Herr Von Muellerhoff';color: goldenrod;font-weight:300;text-align: center;margin-bottom:0;margin-top:0;line-height:1.4;font-size: 46px;">Dolton Bakery</h1>
					<a style="color: darkgoldenrod; font-weight: bold;" target="blank" href="https://www.wowthemes.net/">&copy; Dolton Bakery | 2021</a>
				</div>
			</div>
		</footer>
		<!-- <a href="#top" class="smoothup" title="Back to top"><span class="genericon genericon-collapse"></span></a> -->
	</div>

	<!-- #page -->
	<script src='assets/js/jquery.js'></script>
	<script src='assets/js/plugins.js'></script>
	<script src='assets/js/scripts.js'></script>
	<script src='assets/js/masonry.pkgd.min.js'></script>
</body>

</html>