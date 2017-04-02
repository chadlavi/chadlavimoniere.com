<?php
if (empty($title) || empty($meta)) {
    echo 'title and meta are required variables for header';
}
echo '<!DOCTYPE html> 
<html> 
<head> 
  <script src="https://use.fontawesome.com/4cbdfa5ae9.js"></script>
  <link rel="stylesheet" type="text/css" href="/style.css">
  <meta name="description" content="' . $meta . '">
  <meta name="keywords" content="UX, User Experience Design, Web Design, prototyping">
  <meta name="author" content="Chad Lavimoniere">
  <title>' . $title . '</title>
</head>';
?>
