<!DOCTYPE html>
<html>
	<?php include 'header.php'; ?>
	<body class="body_width" onselectstart="return true">
		<?php include 'banner.php'; ?>
		<div style="margin:0;padding:0;">
			<form method="post">
				<p>
				Title: <input name="article_title"></input>
				</p>	
				<p>	
				<textarea name="editor1">&lt;p&gt;Initial value.&lt;/p&gt;</textarea>
            			<script>
                			CKEDITOR.replace( 'editor1' );
            			</script>
        			</p>
				<input type="submit" value="submit"></input>
    			</form>
		</div>
		<p><?php include 'footer.php'; ?></p>
	</body>
</html>

