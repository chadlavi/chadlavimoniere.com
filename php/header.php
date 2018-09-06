<?php
if (empty($title) || empty($meta)) {
    echo 'title and meta are required variables for header';
}
echo '<!DOCTYPE html> 
<html> 
<head> 
<!-- Google Tag Manager --> <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({"gtm.start": new Date().getTime(),event:"gtm.js"});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!="dataLayer"?"&l="+l:"";j.async=true;j.src= "https://www.googletagmanager.com/gtm.js?id="+i+dl;f.parentNode.insertBefore(j,f); })(window,document,"script","dataLayer","GTM-PHQGJWR");</script> <!-- End Google Tag Manager -->
  <script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js" integrity="sha384-4oV5EgaV02iISL2ban6c/RmotsABqE4yZxZLcYMAdG7FAPsyHYAPpywE9PJo+Khy" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="/style.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.css">
  <meta name="description" content="' . $meta . '">
  <meta name="keywords" content="' . $keywords . '">
  <meta name="author" content="Chad Lavimoniere">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:description" content="' . $meta . '">
  <meta property="og:title" content="' . $title . '">
  <title>' . $title . '</title>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script>
    function onSubmit(token) {
      document.getElementById("contact").submit();
    }
  </script>
  <meta name="p:domain_verify" content="53285d67644c55300f8e387d643f55e9"/>';
include '../php/console-logger.php';
echo'</head>';
?>
