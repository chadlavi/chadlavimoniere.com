<?php
$config = parse_ini_file('../config.ini'); 
$id = $_GET['id'];
if (isset($_GET["id"])){
  $class = "article";
} else {
  $class = "list";
}

$mysqli = new mysqli("localhost", $config['username'], $config['password'], $config['dbname']);

// check connection 
if ($mysqli->connect_errno) {
    echo "Connect failed: %s\n", $mysqli->connect_error;
    exit();
}

echo "<!DOCTYPE html> 
<html> 
<head> 
<link rel=\"stylesheet\" type=\"text/css\" href=\"test.css\">";

// if an id is passed in the URL, load that article
if (isset($_GET["id"])){
if ($result = $mysqli->query("SELECT * from article where id = $id")) {
    
    while ($row = mysqli_fetch_assoc($result)) {
       $datetime = new DateTime($row['updated']);
       $target_timezone = new DateTimeZone('America/New_York');
       $datetime->setTimeZone($target_timezone);
       echo "<meta name=\"description\" content=\"", $row['meta'], "\">
  <meta name=\"keywords\" content=\"UX, User Experience Design, Web Design, prototyping\">
  <meta name=\"author\" content=\"Chad Lavimoniere\">
  <title>", $row['name'],"</title>
</head>

<body class=\"$class\"> <div class=\"container\"><a href=\"test.php\">< back to list</a> ";


      echo "<h1>", $row['name'], "</h1><h3>Posted ", $datetime->format('Y/m/d h:i A'), "</h3> <div>", $row['body'], "</div>";
    }
    echo "<br><br><a href=\"test.php\">< back to list</a>";
    $result->close();
  }
} 
// or just load a list of articles
else {
  if ($result = $mysqli->query("SELECT id, name, image_url from article order by updated desc")) {
   echo "<meta name=\"description\" content=\"Case studies in User Experience design\">
  <meta name=\"keywords\" content=\"UX, User Experience Design, Web Design, prototyping\">
  <meta name=\"author\" content=\"Chad Lavimoniere\">
  <title>Case Studies</title>
</head>

<body class=\"$class\"> <div class=\"container\">";

    echo "<ul>";
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<li style=\"background-image: url(", $row['image_url'], ")\"><a href=\"test.php?id=", $row['id'], "\">", $row['name'], "</a></li>";
    }
    echo "</ul>";

    /* free result set */
    $result->close();
  }
}

$mysqli->close();
?>

</div>
</body>
</html>
