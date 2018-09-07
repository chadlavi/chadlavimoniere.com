<?php
include '../../php/gzip.php';
include '../../php/connect.php';
$title = 'Chad Lavimoniere';
$meta = 'Case studies in product design';
$keywords = 'UX, User Experience Design, Product Design, Web Design, prototyping';
include '../../php/header.php';
include '../../php/seoURL.php';

if ($result = $mysqli->query("SELECT id, name, image_url from article where hide != 1 order by created desc")) {
    echo'<body class="list">';
    include '../../php/nav.php';
    echo '<div class="section container">';
    echo '<h1 class="title">My Portfolio</h1>';
    echo '<ul>';
    while ($row = mysqli_fetch_assoc($result)) {
        include '../../php/list.php';
    }
    echo '</ul>';
    $result->close();
}

$mysqli->close();

include '../../php/footer.php';
?>
