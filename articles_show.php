<!DOCTYPE html>
<html>
	<?php include 'header.php'; ?>
	<body class="body_width" onselectstart="return true">
		<?php include 'banner.php'; ?>
		<div style="margin:0;padding:0;">
			<script type="text/javascript">
				function setIframeHeight(iframe) {
				    if (iframe) {
					var iframeWin = iframe.contentWindow || iframe.contentDocument.parentWindow;
					if (iframeWin.document.body) {
					    iframe.height = iframeWin.document.documentElement.scrollHeight || iframeWin.document.body.scrollHeight;
					}
				    }
				};
				function iframeLoaded() {
					setIframeHeight(document.getElementById('iframe'));
				};
				function iframeLoaded2() {
					var iFrameID = document.getElementById('iframe');
					if(iFrameID) {
						iFrameID.height = "";
						iFrameID.height = iFrameID.contentWindow.document.body.scrollHeight + "px";
					}
				};
				function iframeLoaded3(iframe) {
					iframe.height = iframe.contentWindow.document.body.scrollHeight + "px";
				};
			</script>
    			<iframe id="iframe" frameBorder="0" onload="iframeLoaded3(this)" src="http://forum.bestqa.org/?author=2"></iframe>	
		</div>
		<?php include 'footer.php'; ?>
	</body>
</html>

