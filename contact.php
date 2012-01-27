<?php include("head.php"); ?>

	<div class="redstrip"></div>
	<div class="center">
		<!-- Header -->
		<?php include("header.php"); ?>

	
		<!-- Main Body -->
		
		 <section id="content">
	
		<div class="deliveryinfo">FREE delivery with order above £80</div>
		
		<div class="breadcrumbs">You are here: Home >  About us</div>
		
		
		
			<!-- Sidebar -->
						
			<?php include("sidebar.php") ?>
			
			<!--main -->
			<article id="middlecolumn">
			<h2>Contact</h2>
			<hr />
			<p><strong>Contact us in Aberystwyth</strong></p>
			<p>31 Pier Street, Aberystwyth,<br />
			Wales, SY23 2LN,<br />
			Email: aberystwyth@ultracomida.co.uk,<br />
			Telephone: 01970 630 686,
			</p>
			<hr />
			<p><strong>Contact us in Narberth</strong></p>
			<p>7 High Street, Narberth,,<br />
			Wales, SA67 7AR,<br />
			Email: narberth@ultracomida.co.uk,<br />
			Telephone: 01834 861 491
			</p>
			<hr />
			<p>
			Fill up the small form below and we will get back to you within 2 business days...
			</p>
				<div id="contact-area">
			<form method="post" action="contactengine.php">
					<label for="Name">Name:</label>
					<input type="text" name="Name" id="Name" />
					
					<!--<label for="City">City:</label>
					<input type="text" name="City" id="City" />-->
		
					<label for="Email">Email:</label>
					<input type="text" name="Email" id="Email" />
					
					<label for="Message">Message:</label><br />
					<textarea name="Message" rows="20" cols="20" id="Message"></textarea>

					<input type="submit" name="submit" value="Submit" class="submit-button" />
				</form>
				
				<div style="clear: both;"></div>
			</div>
			</article>

			<?php include("sidebar-right.php"); ?>
		</section>
	
<?php include("footer.php") ?>
	
	</div><!--center -->
</body>
</html>