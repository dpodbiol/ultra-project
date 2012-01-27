<?php include("head.php"); ?>	
	<div class="redstrip"></div>
	<div class="center">
		<!-- Header -->
	<?php include("header.php"); ?>
		</header>

	
		<!-- Main Body -->
		
		 <section id="content">
	
		<div class="deliveryinfo">FREE delivery with order above £80</div>
		
		<div class="breadcrumbs">You are here: Home >  About us</div>
		
		
		
			<!-- Sidebar -->
			
					<section id="sidebar">
				 
		<?php include("menu-left.php"); ?>

		<div class="browse">
		<h3 class="redback">browse wines by:</h3>
		<ul id="filter">
		
			<li class="current"><a href="#">All</a></li>
			<li class="browsetitle">colour</li>
				<ul>
					<li><a href="#">red</a></li>
					<li><a href="#">white</a></li>
					<li><a href="#">rose</a></li>
				</ul>
			<li class="browsetitle">region</li>
				<ul>
					<li><a href="#">Spain</a></li>
					<li><a href="#">France</a></li>
					<li><a href="#">Portugal</a></li>
				</ul>
			<li class="browsetitle">price</li>
				<ul>
					<li><a href="#">below £10</a></li>
					<li><a href="#">£10-£20</a></li>
					<li><a href="#">above £20</a></li>
				</ul>
		</ul>
		</div>
		
		<div class="imageside">
		<h3>Pepe's picks</h3>
		<a href="pepe.php" >
		<div class="pepe-left">
		</div>
		<!--<img src="images/pepe.jpg" width="210"/>-->
		</a>
		</div>
		<div class="newsletter">
			<h3 class="redback">Sign up for our newsletter</h3>
				<p>For the latest on events, offers and discounts</p>
			<form>
			<fieldset>
			  <ol>
				<li>
				  <input id="email" />
				</li>
				<li>
				  <button class="signup">Sign up</button>
				</li>
				</ol>
			</fieldset>
			</form>
		</div>
		<div class="finduson">
		<h3 class="redback">find us on</h3>
		<a class="facebook" href="#">facebook</a>
		<a class="twitter" href="#">twiter</a>
		<a class="feeds" href="#">feeds</a>
		</div>
		<!--<img class="sidepromotion" src="../images/promotion_img.jpg" alt="spanish_products" />-->
			
	</section>
			
			<!--main -->
			<article id="maincolumn">
			
			<div class="imageleft">
			<img src="images/chocolate-img.jpg" alt="chocolate&sweets" />
			</div>
			<div class="textright">
			<h2>Chocolates & sweets</h2>
			<p>Here you’ll find a selection of cakes and biscuit for those with a sweet tooth or our thick hot chocolate – a personal favourite of a number of our customers.</p>
			</div>
			<section id="sort">
			<span>sort by: </span>
			<select type="select" id="sortby">
			<option>price</option>
			<option>name</option>
			</select>
			
			</section>
			
			<section id="products">
				<ul class="products">
							
				
				<li class="red spain below-£10">
				<a href="product.php"><img src="images/wine11.jpg" width="170" alt="spanish_wines" />
				<h4>Casa Muga Cava</h4>
				<span>price</span><span class="price">£7</span>
				<div class="viewitem">view item</div>
				</a>
				</li>
				
				<li class="red spain below-£10"><a href="product.php"><img src="images/wine12.jpg" width="170" alt="spanish_wines" />
				<h4>Manchego Curado Anejo 12 month</h4>
				<span>price</span><span class="price">£9</span>
				<div class="viewitem">view item</div>
				</a>
				</li>
				
				<li class="rose portugal above-£20"><a href="product.php"><img src="images/wine13.jpg" width="170" alt="spanish_wines" />
				<h4>Manchego Curado Anejo 12 month</h4>
				<span>price</span><span class="price">£45</span>
				<div class="viewitem">view item</div>
				</a>
				</li>
				<li class="red france 10-20"><a href="product.php"><img src="images/wine14.jpg" width="170" alt="spanish_wines" />
				<h4>Manchego Curado Anejo 12 month</h4>
				<span>price</span><span class="price">£19</span>
				<div class="viewitem">view item</div>
				</a>
				
				</li>
				
				<li class="white france above-£20">
				<a href="product.php"><img src="images/wine1.jpg" width="170" alt="spanish_wines" />
				<h4>Casa Muga Cava</h4>
				<span>price</span><span class="price">£32</span>
				<div class="viewitem">view item</div>
				</a>
				</li>
				
				<li class="white spain £10-£20">
				<a href="product.php"><img src="images/wine2.jpg" width="170" alt="spanish_wines" />
				<h4>Manchego Curado Anejo 12 month</h4>
				<span>price</span><span class="price">£17</span>
				<div class="viewitem">view item</div>
				</a>
				</li>
				
				<li class="red portugal above-£20"><a href="product.php"><img src="images/wine3.jpg" width="170" alt="spanish_wines" />
				
				<h4>Manchego Curado Anejo 12 month</h4>
				<span>price</span><span class="price">£45</span>
				<div class="viewitem">view item</div>
				</a>
				</li>
				<li class="red portugal £10-£20"><a href="product.php"><img src="images/wine4.jpg" width="170" alt="spanish_wines" />
				<h4>Manchego Curado Anejo 12 month</h4>
				<span>price</span><span class="price">£19</span>
				<div class="viewitem">view item</div>
				</a>
				</li>
				
				<li class="red spain below-£10">
				<a href="product.php"><img src="images/wine11.jpg" width="170" alt="spanish_wines" />
				<h4>Casa Muga Cava</h4>
				<span>price</span><span class="price">£7</span>
				<div class="viewitem">view item</div>
				</a>
				</li>
				
				<li class="red spain below-£10"><a href="product.php"><img src="images/wine12.jpg" width="170" alt="spanish_wines" />
				<h4>Manchego Curado Anejo 12 month</h4>
				<span>price</span><span class="price">£9</span>
				<div class="viewitem">view item</div>
				</a>
				</li>
				
				<li class="rose portugal above-£20"><a href="product.php"><img src="images/wine13.jpg" width="170" alt="spanish_wines" />
				<h4>Manchego Curado Anejo 12 month</h4>
				<span>price</span><span class="price">£45</span>
				<div class="viewitem">view item</div>
				</a>
				</li>
				<li class="red france 10-20"><a href="product.php"><img src="images/wine14.jpg" width="170" alt="spanish_wines" />
				<h4>Manchego Curado Anejo 12 month</h4>
				<span>price</span><span class="price">£19</span>
				<div class="viewitem">view item</div>
				</a>
				
				</li>
				
				<li class="white france above-£20">
				<a href="product.php"><img src="images/wine1.jpg" width="170" alt="spanish_wines" />
				<h4>Casa Muga Cava</h4>
				<span>price</span><span class="price">£32</span>
				<div class="viewitem">view item</div>
				</a>
				</li>
				
				<li class="white spain £10-£20">
				<a href="product.php"><img src="images/wine2.jpg" width="170" alt="spanish_wines" />
				<h4>Manchego Curado Anejo 12 month</h4>
				<span>price</span><span class="price">£17</span>
				<div class="viewitem">view item</div>
				</a>
				</li>
				
				<li class="red portugal above-£20"><a href="product.php"><img src="images/wine3.jpg" width="170" alt="spanish_wines" />
				
				<h4>Manchego Curado Anejo 12 month</h4>
				<span>price</span><span class="price">£45</span>
				<div class="viewitem">view item</div>
				</a>
				</li>
				<li class="red portugal £10-£20"><a href="product.php"><img src="images/wine4.jpg" width="170" alt="spanish_wines" />
				<h4>Manchego Curado Anejo 12 month</h4>
				<span>price</span><span class="price">£19</span>
				<div class="viewitem">view item</div>
				</a>
				</li>
				</ul>
				</section>
			</article>
		</section>
	
	<?php include("footer.php"); ?>
	
	</div><!--center -->
		
<script type="text/javascript" src="js/framework.js"></script>		
</body>
</html>