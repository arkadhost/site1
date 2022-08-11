<?php
$token = $_GET['token'];
$iframe = '<html><head></head><body style="padding: 0;margin: 0;overflow: hidden;"> <iframe src= "run.php?token='.$token.'" style="padding: 0; margin: 0; overflow: hidden; border: 0px #ffffff none; height: 100vh; width: 100vw;"/> <script disable-devtool-auto src="https://fastly.jsdelivr.net/npm/disable-devtool/disable-devtool.min.js"></script></body></html>';
echo $iframe;
?>