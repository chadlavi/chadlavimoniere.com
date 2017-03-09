<?php
include '../php/gzip.php';
include '../php/connect.php';
$title="Case Studies";
$meta="Case studies in User Experience design";
include '../php/header.php';
include '../php/seoURL.php';

if ($result = $mysqli->query("SELECT id, name, image_url from article order by updated desc")) {
    echo"<body class=\"list\">";
    include '../php/nav.php';
    echo "<div class=\"container\">";
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>
		<a href=\"/article/", $row['id'], "/",seoUrl($row['name']),"\">", $row['name'], "</a>
		<div class=\"background\"><img src=\"", $row['image_url'], "\"></div>
		</li>";
    }
    echo "</ul>";
    $result->close();
}

$mysqli->close();

include '../php/footer.php';
?>

