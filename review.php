<?php include("head.php"); ?>	
	<div class="redstrip"></div>
	<div class="center">
		<!-- Header -->
	<?php include("header.php"); ?>

	
		<!-- Main Body -->
		
		 <section id="content">
	
		<div class="deliveryinfo">FREE delivery with order above £80</div>
		
		
		
		
			<!-- Sidebar -->
			
			<!--main -->
	<article id="onecolumn">
		<div class="mainsite">
		<ul class="shoppingprocess">
			<li><span>1</span> login</li>
			<li><span>2</span> delivery details</li>
			<li class="active"><span>3</span> review</li>
			<li><span>4</span> submit</li>
			</ul>
		
			<h2>Review your order</h2>
			<div id="scrolltable">
				<table class="border">
				<tr>
				<th>Image</th>
				<th>Name</th>
				<th>Model</th>
				<th>Quantity</th>
				<th>Unit Price</th>
				<th>Total</th>
				</tr>
				<td><img src="images/wine2.jpg" width="70" alt="spanish_wines" /></td>
				<td><a href="product.php">Spanish Wine</a></td>
				<td>0000012212</td>
				<td>1</td>
				<td>£7.95</td>
				<td>£7.95</td>
				</tr>
				<td><img src="images/wine4.jpg" width="70" alt="spanish_wines" /></td>
				<td><a href="product.php">Spanish Wine really long name of some product</a></td>
				<td>0000012212</td>
				<td>1</td>
				<td>£5.95</td>
				<td>£5.95</td>
				</tr>
				</table>
			</div>
				<article id="middlecolumn">
				 <div class="reviewtext">
					<h3>Shipping adress</h3>
					<p>Unit 4 Science Park</p>
					<p>Aberystwyth</p>
					<p>Sy23 2JS </p>
					<p><a href="#">edit</a></p>
					<ul class="updateshopping">
						<li>
						  <a href ="logreg.php" class="signup">Submit</a>
						</li>
						<li><a class="continue" href="shoponline.php">Cancel</a></li>
					</ul>
				</div>
			</article>
		</div>
	</article>

		<!--<section id="rightsidebar">
			<h3>our restaurants</h3>
			<div class="restaurant">
			<h4>Aberystwyth</h4>
			<img src="images/restaurant-aber.jpg" alt="spanish_products" />
			</div>
			<div class="restaurant">
			<h4>Narberth</h4>
			<img src="images/restaurant-narb.jpg" alt="spanish_products" />
			</div>
			</section>-->
		</section>
	
	<?php include("footer.php"); ?>
	
	</div><!--center -->
</body>
</html>