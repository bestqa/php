<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>
		<?php  
			$page_title =  basename($_SERVER['PHP_SELF'], '.php');
			if($page_title == "index"){
				$page_title = "bestqa.org";
				echo $page_title;
			}else
				echo $page_title;
		?>
	</title>
	<?php if($page_title == "articles") echo '<script src="/ckeditor/ckeditor.js"></script>'; ?>
	<style type="text/css"> 
		<!--
		@import url("/stylesheets/home.css");
		-->
	</style>
</head>
