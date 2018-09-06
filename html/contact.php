<?php
$title = 'Contact';
$meta = 'Contact Info';
$keywords = 'UX, User Experience Design, Web Design, prototyping';
include '../php/gzip.php';
include '../php/header.php';

echo '<body class="article-page">';

include '../php/nav.php';

echo '<div class="section container"><h1 class="title">Contact</h1><div class="article contact">';
include '../php/contact.php';
echo'</div>';

include '../php/footer.php';
?>
