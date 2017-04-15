<?php
include '../php/gzip.php';
include '../php/connect.php';
$title = 'Chad Lavimoniere';
$meta = 'Case studies in User Experience design';
include '../php/header.php';
include '../php/seoURL.php';

if ($result = $mysqli->query("SELECT id, name, image_url from article order by updated desc")) {
    echo'<body class="list">';
    include '../php/nav.php';
    echo '<div class="container">';
    echo '<ul>';
    while ($row = mysqli_fetch_assoc($result)) {
        include '../php/list.php';
    }
    echo '</ul>';
    $result->close();
}

$mysqli->close();

include '../php/footer.php';
?>

