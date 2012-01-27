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
			<a href="elisabeth.php">All videos</a>
			
			<?php
				include 'youtube_tools.php';

				//path used to pass video id so search engines can index them
				// $pathInfo=$_SERVER['PATH_INFO'];
				// $pathInfo=substr($pathInfo, 1, strlen($pathInfo));
				// $pathInfo=explode("/", $pathInfo);
				// $video=$pathInfo[0];
				
				$video=$_SERVER['QUERY_STRING'];
				//call video data function to get video details
				$videoDetails = get_video_data($video);
				?>

				
						<h2><?php echo $videoDetails['title']; ?></h2>
						<div class="view_video_wrap">
					<center><iframe width="560" height="315" src="http://www.youtube.com/embed/<?php echo $video; ?>?showinfo=0&rel=0&hd=1" frameborder="0" allowfullscreen></iframe></center>
					<div class="view_video_description"><p><?php echo $videoDetails['description']; ?></p></div>
				</div>

	
			</article>

		</section>
	
	<?php include("footer.php"); ?>
	
	</div><!--center -->
</body>
</html>
