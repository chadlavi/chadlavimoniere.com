<?php
include '../php/gzip.php';
include '../php/connect.php';
include '../php/timezone.php';
include '../php/lib_autolink.php';
$id = $_GET['article'];

if (isset($_GET['article'])){
    $result = $mysqli->query("SELECT * from article where id = {$id}");
    if (mysqli_num_rows($result)>0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $title = $row['name'];
            $meta = $row['meta'];
            $keywords = $row['keywords'];
            include '../php/header.php';
            echo '<body class="article-page">';
            include '../php/nav.php';
            if (!empty($row['image_url'])) {
                echo '<div class="masthead" style="background-image: url(\'' . $row['image_url'] . '\');"></div>';
            }
            echo '<div class="container">';
            echo '<h1>' . $row['name'] . '</h1><h3>Posted ' . timezone($row['updated']) . '</h3> <div class="article">' . autolink($row['body'], 100) . '</div>';
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

