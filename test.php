<!DOCTYPE html>
<html>
	<head>
		<title>Ian & Vanessa Wedding Photo</title>
		<meta property="og:title" content="Ian & Vanessa's Wedding"/>
	    <meta property="og:type" content="website"/>
	    <meta property="og:url" content="http://ivwedding.latteblog.com"/>
	    <meta property="og:image" content="https://sphotos-b.xx.fbcdn.net/hphotos-ash3/561267_10150825671941081_1494027108_n.jpg"/>
	    <meta property="og:site_name" content="Ian & Vanessa's Wedding"/>
	    <meta property="og:description" content="A page of Instagram photos featuring Ian & Vanessa's wedding in Belize. Contribute your photos by applying the hashtag #ivwedding"/>

	    <!-- Fancy Box -->
		<link rel="stylesheet" href="/stylesheets/jquery.fancybox-1.3.4.css" type="text/css">
		<script type='text/javascript' src='/javascripts/jquery.min.js'></script>
		<script type='text/javascript' src='/javascripts/jquery.fancybox-1.3.4.pack.js'></script>

		<!-- styles -->
		<?php include $_SERVER['DOCUMENT_ROOT']."/templates/styles.php"; ?>

		<!-- get photos from instagram API -->
		<?php include $_SERVER['DOCUMENT_ROOT']."/templates/getInstaPhotos2.php"; ?>

		<script type='text/javascript' src='/javascripts/updatePhotos.js'></script>
	</head>

	<body>
		<!-- load header -->
		<?php include $_SERVER['DOCUMENT_ROOT']."/templates/header.php"; ?>

		<div class="intro center">
			<p>Contribute your photos by uploading pictures to Instagram with hashtag #ivwedding</p>
		</div>

		<div class="image-containers center">

			<?php foreach ($photos as $post): ?>
				<a class="group" rel="group1" title="<?php echo 'From: ' .$post->user->username . ' - ' . $post->caption->text; ?>" href="<?php echo $post->images->standard_resolution->url ?>">
					<img src="<?php echo $post->images->thumbnail->url ?>">
				</a>

			<?php endforeach ?>
			<input type="hidden" value="<?php echo $result->data[0]->id; ?>" id="last"/>
		</div>

		<!-- load footer -->
		<?php include $_SERVER['DOCUMENT_ROOT']."/templates/footer.php"; ?>
		
		<!--  load google analytics -->
		<?php include $_SERVER['DOCUMENT_ROOT']."/templates/ga.php"; ?>

		<script type="text/javascript">
			$(function() {
				$("a.group").fancybox({
					'nextEffect'	:	'fade',
					'prevEffect'	:	'fade',
					'overlayOpacity' :  0.8,
					'overlayColor' : '#000000',
					'arrows' : false,
				});			
			});
		</script>
	</body>
</html>