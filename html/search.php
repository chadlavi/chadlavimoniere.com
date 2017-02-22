<?php
error_reporting(E_ALL); ini_set('display_errors', 'on');
#get query string but strip out all but A-Z, a-z, and 0-9
$term = preg_replace("/[^a-zA-Z0-9]+/", "",$_GET['q']);
$query = "select id, name, image_url, nameOccurrences+bodyOccurrences as weightedScore from ( SELECT p.id, p.name, p.image_url, SUM(((LENGTH(p.name) - LENGTH(REPLACE(lower(p.name), '".$term."', '')))/(LENGTH('".$term."')/2))) AS nameOccurrences, SUM(((LENGTH(p.body) - LENGTH(REPLACE(lower(p.body), '".$term."', '')))/(LENGTH('".$term."')/1))) AS bodyOccurrences FROM article AS p GROUP BY p.id ORDER BY nameOccurrences DESC, bodyOccurrences DESC) x WHERE nameOccurrences+bodyOccurrences > 0 ORDER BY weightedScore DESC, id DESC;";
include '../php/header.php';

function seoUrl($string) {
    //Lower case everything
    $string = strtolower($string);
    //Make alphanumeric (removes all other characters)
    $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
    //Clean up multiple dashes or whitespaces
    $string = preg_replace("/[\s-]+/", " ", $string);
    //Convert whitespaces and underscore to dash
    $string = preg_replace("/[\s_]/", "-", $string);
    return $string;
}
$result = $mysqli->query($query) or trigger_error(mysql_error()." ".$query);
if ($result) {
   echo "<meta name=\"description\" content=\"Case studies in User Experience design\">
  <meta name=\"keywords\" content=\"UX, User Experience Design, Web Design, prototyping\">
  <meta name=\"author\" content=\"Chad Lavimoniere\">
  <title>Case Studies</title>
</head>

<body class=\"list\">";
include '../php/nav.php';
echo "<div class=\"container\">";

    echo "<ul>";
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<li style=\"background-image: url(", $row['image_url'], ")\"><a href=\"article/", $row['id'], "/",seoUrl($row['name']),"\">", $row['name'], "</a></li>";
    }
    echo "</ul>";

    /* free result set */
    $result->close();
} else { echo "no results for $term<br><br>$result";}

$mysqli->close();

include '../php/footer.php';
?>

