<html>
	<head>
	
		<title>
		David M Gray
		</title>

		<link rel="stylesheet" type="text/css" href="style.css" title="Default">
		
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

				<div id="CADDFrontBlock">
					<?php include("Elements/Includes/CADDFlash.php"); ?>
				</div>

				<div id="GADFrontBlock">
					<?php include("Elements/Includes/GADFlash.php"); ?>
				</div>
				
			</div>

			<div id="TDCFrontBlock">
				<?php include("Elements/Includes/TDCFlash.php"); ?>
			</div>

			<div id="OtherFrontBlock">
				<?php include("Elements/Includes/MinorFlash.php"); ?>
			</div>

			<hr class="standard">
			
			<div class="GenericBlock">
				<?php include("Elements/Includes/OtherLocations.php"); ?>
			</div>
			
			<hr class="standard">
			<div class="Spacer"></div>
			
			<div class="GenericBlock">
				<?php include("Elements/Includes/MainFooter.php"); ?>
			</div>

		</div>

		<div id="MainBottom">
		</div>

	</div>
	<div></div>

</div>

</body>

</html>