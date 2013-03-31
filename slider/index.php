<!DOCTYPE html>
<html>
	<head>
		<title>Ian & Vanessa Wedding Wishes</title>
		<meta property="og:title" content="Ian & Vanessa's Wedding"/>
	    <meta property="og:type" content="website"/>
	    <meta property="og:url" content="http://ivwedding.latteblog.com"/>
	    <meta property="og:image" content="https://sphotos-b.xx.fbcdn.net/hphotos-ash3/561267_10150825671941081_1494027108_n.jpg"/>
	    <meta property="og:site_name" content="Ian & Vanessa's Wedding"/>
	    <meta property="og:description" content="Wedding galler slider, take pic with #ivwedding"/>

	    <!-- nivo slider -->
	    <link rel="stylesheet" href="/stylesheets/nivo-slider.css" type="text/css" media="screen" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
		<script src="/javascripts/jquery.nivo.slider.pack.js" type="text/javascript"></script>

		<!-- styles -->
		<?php include $_SERVER['DOCUMENT_ROOT']."/templates/styles.php"; ?>

		<!-- get photos from instagram API -->
		<?php include $_SERVER['DOCUMENT_ROOT']."/templates/getInstaPhotos.php"; ?>

	</head>

	<body>
		<!-- load header -->
		<?php include $_SERVER['DOCUMENT_ROOT']."/templates/header.php"; ?>

		<!-- Content -->
		<div class="slider-wrapper center">
		    <div id="slider" class="nivoSlider">
		    	<?php foreach ($photos as $post): ?>
		    		<img src="<?php echo $post->images->standard_resolution->url; ?>" title="<?php echo 'From: ' .$post->user->username . ' - ' . $post->caption->text; ?>">
				<?php endforeach ?>
		    </div>
		</div>
		<div id="htmlcaption" class="nivo-html-caption">
		    <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
		</div>
		
		<!-- End of Content -->

		<!-- load footer -->
		<?php include $_SERVER['DOCUMENT_ROOT']."/templates/footer.php"; ?>
		
		<!--  load google analytics -->
		<?php include $_SERVER['DOCUMENT_ROOT']."/templates/ga.php"; ?>

		<script type="text/javascript">
			$(window).load(function() {
			    $('#slider').nivoSlider({
			    	controlNav: false, // 1,2,3... navigation
			        controlNavThumbs: false, // Use thumbnails for Control Nav
			        pauseOnHover: false, // Stop animation while hovering
			        manualAdvance: false, // Force manual transitions
			        prevText: '', // Prev directionNav text
			        nextText: '' // Next directionNav text
			    });
			});
		</script>
	</body>
</html>