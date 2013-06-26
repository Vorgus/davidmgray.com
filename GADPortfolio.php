<html>
	<head>
	
		<title>
		David M Gray - Game Art and Design - Portfolio
		</title>

		<link rel="stylesheet" type="text/css" href="style.css" title="Default">
		
		<script type="text/javascript" src="Elements/Javascript/prototype.js"></script>
		<script type="text/javascript" src="Elements/Javascript/scriptaculous.js?load=effects,builder"></script>
		<script type="text/javascript" src="Elements/Javascript/lightbox.js"></script>
		
		<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-5639342-1']);
		_gaq.push(['_trackPageview']);
		
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
		</script>
		
	</head>

<body>


<div id="SiteWrapper">

	<div id="MenuWrapper">

		<div id="MenuTop">
		</div>
	
		<div id="MenuBody">
			<?php include("Elements/Includes/MainMenu.php"); ?>
		</div>
		
		<div id="MenuBottom">
		</div>		

	</div>

	
	<div id="MainWrapper">

		<div id="MainTop">
		</div>

		<div id="MainBody">

			<div class="GenericBlock">
				<img src="Elements/Images/Site/HomeHeader.png">
			</div>

			<hr class="standard">
			
			<div class="GenericBlock">
				<?php include("Elements/Includes/GADMenu.php"); ?>
			</div>

			<hr class="standard">
			
			<div class="Spacer"></div>
			
			<div class="GenericTitleBlock">
				<span class="SubTitleText">
				Portfolio
				</span>
			</div>

			<div class="Spacer"></div>
			
			<div class="GenericTextBlock">
				<span class="StandardText">
					Click a thumbnail below to see some samples of my 2D and 3D artwork.
				</span>
			</div>
			
			<div class="Spacer"></div>
			
			<hr class="standard">
			<div class="Spacer"></div>

			<div class="GenericTitleBlock">
				<span class="MinorTitleText">
				2D
				</span>
			</div>
			
			<div class="Spacer"></div>
			
			<div class="GenericBlock">
				<?php include("Elements/Includes/GADPortfolio2DGallery.php"); ?>
			</div>	

			<div class="Spacer"></div>
			<div class="Spacer"></div>
			
			<div class="GenericTitleBlock">
				<span class="MinorTitleText">
				3D
				</span>
			</div>
			
			<div class="Spacer"></div>
			
			<div class="GenericBlock">
				<?php include("Elements/Includes/GADPortfolio3DGallery.php"); ?>
			</div>
			
			<hr class="standard">
			<div class="Spacer"></div>
			
			<div class="GenericBlock">
				<?php include("Elements/Includes/AlternateFooter.php"); ?>
			</div>

		</div>

		<div id="MainBottom">
		</div>

	</div>

</div>

</body>

</html>