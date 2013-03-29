<!DOCTYPE html>
<html>
	<head>
		<title>Ian & Vanessa Wedding Wishes</title>
		<meta property="og:title" content="Ian & Vanessa's Wedding"/>
	    <meta property="og:type" content="website"/>
	    <meta property="og:url" content="http://ivwedding.latteblog.com"/>
	    <meta property="og:image" content="https://sphotos-b.xx.fbcdn.net/hphotos-ash3/561267_10150825671941081_1494027108_n.jpg"/>
	    <meta property="og:site_name" content="Ian & Vanessa's Wedding"/>
	    <meta property="og:description" content="Leave your wishes for the new couple Ian & Vanessa here."/>
	    
	    <!-- styles -->
		<?php include $_SERVER['DOCUMENT_ROOT']."/templates/styles.php"; ?>
	</head>

	<body>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  	var js, fjs = d.getElementsByTagName(s)[0];
		  	if (d.getElementById(id)) return;
		  	js = d.createElement(s); js.id = id;
		  	js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=463441433724509";
		  	fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>

		<!-- load header -->
		<?php include $_SERVER['DOCUMENT_ROOT']."/templates/header.php"; ?>

		<div class="intro center">
			<p>Leave your blessings here for the New Couple</p>
		</div>

		<div class="comment-containers center" style="max-width: 766px; min-height: 600px;">
			<div class="fb-comments" data-href="http://ivwedding.latteblog.com" data-width="766" data-num-posts="30" style="background-color:lightcyan;"></div>
		</div>

		<!-- load footer -->
		<?php include $_SERVER['DOCUMENT_ROOT']."/templates/footer.php"; ?>
		
		<!--  load google analytics -->
		<?php include $_SERVER['DOCUMENT_ROOT']."/templates/ga.php"; ?>
	</body>
</html>