<?php
if (empty($title) || empty($meta)) {
    echo 'title and meta are required variables for header';
}
echo '<!DOCTYPE html> 
<html> 
<head> 
<!-- Google Tag Manager --> <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({"gtm.start": new Date().getTime(),event:"gtm.js"});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!="dataLayer"?"&l="+l:"";j.async=true;j.src= "https://www.googletagmanager.com/gtm.js?id="+i+dl;f.parentNode.insertBefore(j,f); })(window,document,"script","dataLayer","GTM-PHQGJWR");</script> <!-- End Google Tag Manager -->
  <script src="https://use.fontawesome.com/4cbdfa5ae9.js"></script>
  <link rel="stylesheet" type="text/css" href="/style.css">
  <meta name="description" content="' . $meta . '">
  <meta name="keywords" content="' . $keywords . '">
  <meta name="author" content="Chad Lavimoniere">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:description" content="' . $meta . '">
  <meta property="og:title" content="' . $title . '">
  <title>' . $title . '</title>
  <script src="https://www.google.com/recaptcha/api.js"></script>
  <meta name="p:domain_verify" content="53285d67644c55300f8e387d643f55e9"/>
</head>';
?>
