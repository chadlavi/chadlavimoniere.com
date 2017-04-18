<?php
if (empty($title) || empty($meta)) {
    echo 'title and meta are required variables for header';
}
echo '<!DOCTYPE html> 
<html> 
<head> 
<!-- Google Tag Manager --> <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({"gtm.start": new Date().getTime(),event:"gtm.js"});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!="dataLayer"?"&l="+l:"";j.async=true;j.src= "https://www.googletagmanager.com/gtm.js?id="+i+dl;f.parentNode.insertBefore(j,f); })(window,document,"script","dataLayer","GTM-PHQGJWR");</script> <!-- End Google Tag Manager -->
  <script src="https://use.fontawesome.com/4cbdfa5ae9.js"></script>
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
<link rel="stylesheet" href="/styles/milligram.min.css">
<link href="https://use.fontawesome.com/4cbdfa5ae9.css" media="all" rel="stylesheet">
  <meta name="description" content="' . $meta . '">
  <meta name="keywords" content="UX, User Experience Design, Web Design, prototyping">
  <meta name="author" content="Chad Lavimoniere">
  <title>' . $title . '</title>
</head>';
?>
