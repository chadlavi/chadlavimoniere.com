<?php
include '../php/connect.php';
include '../php/timezone.php';
$id = $_GET['article'];

if (isset($_GET['article'])){
    $result = $mysqli->query("SELECT * from article where id = {$id}");
    if (mysqli_num_rows($result)>0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $title = $row['name'];
            $meta = $row['meta'];
            include '../php/header.php';
            echo "<body class=\"article-page\">";
            include '../php/nav.php';
            echo" <div class=\"container\">";
            echo "<h1>", $row['name'], "</h1><h3>Posted ", timezone($row['updated']), "</h3> <div class=\"article\">", $row['body'], "</div>";
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

