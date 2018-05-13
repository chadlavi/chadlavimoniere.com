<?php
include '../php/gzip.php';
include '../php/connect.php';
include '../php/timezone.php';
include '../php/lib_autolink.php';
$id = $_GET['article'];

if (isset($_GET['article'])){
    $result = $mysqli->query("SELECT * from article where id = {$id}");
    if (mysqli_num_rows($result)==1) {
        while ($row = mysqli_fetch_assoc($result)) {
            $title = $row['name'] ?: 'Chad Lavimoniere';
            $meta = $row['meta'] ?: 'Case studies in product design';
            $keywords = $row['keywords'] ?: 'UX, User Experience Design, Product Design, Web Design, prototyping';
            include '../php/header.php';
            echo '<body class="article-page">';
            include '../php/nav.php';
            if (!empty($row['image_url'])) {
                #echo '<div class="masthead"><img src="' . $row['image_url'] . '"></div><div class="envelope">';
                echo '<div class="masthead" style="background-image: url(\'' . $row['image_url'] . '\');"></div><div class="envelope">';
                echo '<div class="container">';
                echo '<h1>' . $row['name'] . '</h1><h4>Last updated ' . timezone($row['updated']) . '</h4> <div class="article">' . autolink($row['body'], 100) . '</div></div>';
            } else {
                echo '<div class="container">';
                echo '<h1>' . $row['name'] . '</h1><h4>Last updated ' . timezone($row['updated']) . '</h4> <div class="article">' . autolink($row['body'], 100) . '</div>';
            }
        }
        $result->close();
    } else {
        header( 'Location: /');
    }
} else {
    header( 'Location: /');
} 

$mysqli->close();

include '../php/footer.php';
?>

