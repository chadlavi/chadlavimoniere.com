<?php
include '../php/header.php';
$id = $_GET['article'];

// if an id is passed in the URL, load that article
if (isset($_GET["article"])){
$result = $mysqli->query("SELECT * from article where id = $id");
  if (mysqli_num_rows($result)>0) {
    while ($row = mysqli_fetch_assoc($result)) {
       $datetime = new DateTime($row['updated']);
       $target_timezone = new DateTimeZone('America/New_York');
       $datetime->setTimeZone($target_timezone);
       echo "<meta name=\"description\" content=\"", $row['meta'], "\">
  <meta name=\"keywords\" content=\"UX, User Experience Design, Web Design, prototyping\">
  <meta name=\"author\" content=\"Chad Lavimoniere\">
  <title>", $row['name'],"</title>
</head>

<body class=\"article-page\">";
include '../php/nav.php';
echo" <div class=\"container\">";


      echo "<h1>", $row['name'], "</h1><h3>Posted ", $datetime->format('Y/m/d h:i A'), "</h3> <div class=\"article\">", $row['body'], "</div>";
    }
    #echo "<br><br><p><a href=\"/\">back to list</a></p>";
    $result->close();
  } else {
    header( 'Location: index.php');
  }
} else {
   header( 'Location: index.php');
} 

$mysqli->close();

include '../php/footer.php';
?>

