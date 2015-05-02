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
                        </script>
                        <iframe id="iframe" frameBorder="0" onload="iframeLoaded();" src="http://bt.bestqa.org"></iframe>
                </div>
                <!--?php include 'footer.php'; ?-->
        </body>
</html>

