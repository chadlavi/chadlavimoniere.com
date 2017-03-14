<?php
$title = "Contact";
$meta = "Contact Info";
include '../php/gzip.php';
include '../php/header.php';

echo "<body class=\"article-page\">";

include '../php/nav.php';

echo" <div class=\"container\"><h1>Contact</h1><div class=\"article contact\">";
include '../php/contact.php';
echo"</div>";

include '../php/footer.php';
?>

