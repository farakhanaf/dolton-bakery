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

<body class="home page page-template page-template-template-portfolio page-template-template-portfolio-php">
    <div id="page">
        <div class="container">
            <header id="masthead" class="site-header">
                <div class="site-branding">
                    <img src="assets/images/slider4.jpg" style="width:100%">
                    <p class="site-description" style="color: pink; font-size: 30px;">It's love in every bites</p>
                    <!-- <h1 class="site-title"><a href="index.html" rel="home" style="color: goldenrod;">Dolton Bakery</a></h1>
					<h2 class="site-description" style="color: goldenrod;">It's love in every bites</h2> -->
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
								</ul>
							</li> -->
                            <li><a href="<?= base_url('/contact');  ?>">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </header>

            <!-- Code for calling content -->
            <?= $this->renderSection('content'); ?>
            <!-- endCode for calling content-->

            <hr />
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