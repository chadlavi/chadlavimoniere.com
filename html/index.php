<?php
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

if ($result = $mysqli->query("SELECT id, name, image_url from article order by updated desc")) {
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
}

$mysqli->close();

include '../php/footer.php';
?>

