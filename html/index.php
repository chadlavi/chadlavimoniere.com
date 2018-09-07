<?php
include '../php/gzip.php';
$title = 'Chad Lavimoniere';
$meta = 'Chad Lavimoniere is a UX/UI designer and creative technologist based in Brooklyn, NY';
$og_image = 'http://chadlavimoniere.com/images/headshot.png';
$keywords = 'UX, User Experience Design, Product Design, Web Design, prototyping';
include '../php/header.php';

echo'<body class="hero is-info is-fullheight is-bold">';
include '../php/nav.php';
echo '

<div class="hero-body">
    <div class="container has-text-centered">
        <h1 class="title">Hi there, I\'m Chad 🙋‍♂️</h1>
        <h2 >I\'m a product designer, creative technologist, and FE hack in Brooklyn, NY.</h2>
    </div>
    
';

include '../php/footer.php';
?>

