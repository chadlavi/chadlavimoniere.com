<?php
include '../php/gzip.php';
include '../php/connect.php';
include '../php/seoURL.php';
error_reporting(E_ALL); ini_set('display_errors', 'on');
if (empty($_GET['q'])) {
    header( 'Location: /');
}
$term = str_replace("%20"," ",$_GET['q']);
$term = preg_replace("/[^a-zA-Z0-9\s]+/", "",$term);
$title = "Search results for \"".$term."\"";
$meta = "Case studies related to ".$term;
include '../php/header.php';
$query = "select id, name, image_url, nameOccurrences+bodyOccurrences as weightedScore from ( SELECT p.id, p.name, p.image_url, SUM(((LENGTH(p.name) - LENGTH(REPLACE(lower(p.name), '{$term}', '')))/(LENGTH('{$term}')/2))) AS nameOccurrences, SUM(((LENGTH(p.body) - LENGTH(REPLACE(lower(p.body), '{$term}', '')))/(LENGTH('{$term}')/1))) AS bodyOccurrences FROM article AS p GROUP BY p.id ORDER BY nameOccurrences DESC, bodyOccurrences DESC) x WHERE nameOccurrences+bodyOccurrences > 0 ORDER BY weightedScore DESC, id DESC;";

$result = $mysqli->query($query) or trigger_error(mysql_error()." ".$query);
if ($result) {
    echo"<body class=\"list\">";
    include '../php/nav.php';
    echo "<div class=\"container\">";
    $count = $result->num_rows;
    if ($count == 1) {
        echo "<p class=\"search-title\">1 result for <i><b>",$term,"</b></i></p><ul>";
    } else {
        echo "<p class=\"search-title\">",$count," results for <i><b>",$term,"</b></i></p><ul>";
    } 
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<li style=\"background-image: url(", $row['image_url'], ")\"><a href=\"/article/", $row['id'], "/",seoUrl($row['name']),"\">", $row['name'], "</a></li>";
    }
    echo "</ul>";

    $result->close();
} else { 
    echo "no results for $term<br><br>$result";
}

$mysqli->close();

include '../php/footer.php';
?>

