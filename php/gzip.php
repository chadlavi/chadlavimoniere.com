<?php 
if ((isset ($_SERVER['HTTP_ACCEPT_ENCODING'])) && substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) {
    ob_start("ob_gzhandler"); 
} else {
    ob_start();
} 
?>
