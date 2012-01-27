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
			<li class="active"><span>2</span> delivery details</li>
			<li><span>3</span> review</li>
			<li><span>4</span> submit</li>
			</ul>
		
		
			<h2>Delivery details</h2>
			<form>
			<fieldset>
			  <legend>Please enter your preferred delivery address. </legend>
			  <ol>
				<li>
				  <label for="firstname">First Name<em>*</em></label>
				  <input id="firstname" />
				</li>
				<li>
				  <label for="lastname">Last Name<em>*</em></label>
				  <input id="lastname" />
				</li>
				<li>
				  <label for="address1">Address<em>*</em></label>
				  <input id="address1" />
				</li>
				<li>
				  <label for="address2">Address 2</label>
				  <input id="address2" />
				</li>
				<li>
				  <label for="town-city">Town/City<em>*</em></label>
				  <input id="town-city" />
				</li>
				<li>
				  <label for="county">County</label>
				  <input id="county" />
				</li>
				<li>
				  <label for="postcode">Postcode<em>*</em></label>
				  <input id="postcode" />
				</li>
				<li>
				  <label for="area">Area<em>*</em></label>
				  <select type="select" id="area" >
					<option value="5">England &amp; Wales (Mainland Only)</option>
					<option value="2">Isle Of Wight</option>
					<option value="4">Northern Ireland</option>
					<option value="15">Other</option>
					<option value="1">Scottish Highland Areas (Mainland Only)</option>
					<option value="6">Scottish Lowlands (Mainland Only)</option>
					<option value="3">Scottish Offshore Islands</option>
					<option value="16">Warehouse Collection</option>
				  </select>
				</li>
				<li>
				  <label for="phone">Phone</label>
				  <input id="phone" />
				</li>
			    <li>
				  <label for="register"></label>
				   <a href="review.php" class="signup">Checkout</a>
				</li>
			</fieldset>
			
			</form>
			<br />	
			<p class="clear">If you don't have an account with us please register first. If you have forgotton your details please request a reminder.</p>
		</div>
	</article>

</section>
	
	<?php include("footer.php"); ?>
	
	</div><!--center -->
</body>
</html>