<?php
  
  $username = "pajlok";
  $type =  ".jpg";
  $html = <<<EOD
	<div onclick="window.location.href = 'user/pajlok/'" style="background: url('user/pajlok/img/$username$type') !important" class="thumb"></div>\n
EOD;
  
  file_put_contents("01_01.php", $html, FILE_APPEND);
?>