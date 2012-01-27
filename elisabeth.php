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
			<article id="maincolumn">
			
			<div class="imageleft">
			<img src="images/elisabeth-pic.jpg" alt="special-xmas" />
			</div>
			<div class="textright">
			<h2>Elisabeth Luard</h2>
			<p>Exclusive and delicious recipes to impress family and friends from our special guest, Elizabeth Luard. 
			Let Elizabeth be your gateway to bringing Spanish flair into your kitchen with exclusive recipes and videos made using ultracomida ingredients. 
			</p>
			</div>
			<section id="sort">
			<span></span>
			</section>
			<?php

			//include youtube tools functions
			include 'youtube_tools.php';
			$page=1;
			//get page #
			if(isset($_GET['page']))
			{
			$page=$_GET['page'];
			}
			//if no page is set display page 1
			if(!$page || $page < 1){
				$page=1;
			}

			//call display function
			//    get_display_feed(<YOUTUBE USERNAME STRING>, <VIDEOS PER PAGE INTEGER>, <PAGE NUMBER INTEGER>)
			echo get_display_feed("ultracomida", 10, $page);

			?>
			
			</article>
		</section>
	
	<?php include("footer.php"); ?>
	
	</div><!--center -->
</body>
</html>