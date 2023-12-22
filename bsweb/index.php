<?php

$link = $_GET['link'];
$title = $_GET['title'];

header("location: brawlstars://webview=page=$link&popup_title=$title");

?>