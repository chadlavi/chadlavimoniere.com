<?php
include '../php/parsedown.php';
include '../php/gzip.php';
include '../php/connect.php';
include '../php/timezone.php';
include '../php/lib_autolink.php';
$id = $_GET['article'];
$Parsedown = new Parsedown();

if (isset($_GET['article'])){
    $result = $mysqli->query("SELECT * from article where id = {$id}");
    if (mysqli_num_rows($result)==1) {
        while ($row = mysqli_fetch_assoc($result)) {
            $title = $row['name'];
            $meta = $row['meta'] ?: 'Chad Lavimoniere is a UX/UI designer and creative technologist based in Brooklyn, NY';
            if ($row['image_url']) { $og_image = $row['image_url']; }
            $keywords = $row['keywords'] ?: 'UX, User Experience Design, Product Design, Web Design, prototyping';
            include '../php/header.php';
            echo '<body class="article-page">';
            include '../php/nav.php';
            echo '<div class="section container">';
            echo '<h1 class="title">' . $row['name'] . '</h1><h4 class="heading subtitle">Posted ' . timezone($row['created']) . ' - Last updated ' . timezone($row['updated']) . '</h4> <div class="article">' . $Parsedown->text($row['body']) . '</div>';
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

