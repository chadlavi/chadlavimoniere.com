<?php
$title = 'About';
$meta = 'Chad Lavimoniere';
$keywords = 'UX, User Experience Design, Web Design, prototyping';
include '../php/gzip.php';
include '../php/header.php';

echo '<body class="">';

include '../php/nav.php';

echo '<div class="container section">';
echo '
    <div class="container is-fluid">
        <h1 class="title">Chad Lavimoniere</h1>
        <article class="media section">        
            <div class="media-left">
            <figure class="image is-128x128">
                <img src="/images/headshot.png" class="is-rounded" alt="image of the author" title="yep, that\'s me">
            </figure>
            </div>
            <div class="media-content">
                <h2 class="heading">About Me</h2>
                <p class="content">I\'m a Product designer, creative technologist, and frontend hack with nearly a decade of experience building ecommerce sites, B2B web apps, and design tools.</p>
                <p class="content">I live in Brooklyn with my wife, dog, 29 houseplants, and three raspberry pis (two pi0ws, one 2b+. Ask me about \'em!).</p>
                <p class="content">&nbsp;</p>
            </div>
        </article>
        <article class="section">
           <h2 class="heading">Links</h2> 
           <ul>
               <li>github: <a href="https://github.com/chadlavi">https://github.com/chadlavi</a></li>
               <li>linkedin: <a href="https://www.linkedin.com/in/chadlavimoniere/">https://www.linkedin.com/in/chadlavimoniere/</a></li>
               <li>portfolio: <a href="/portfolio">http://chadlavimoniere.com/portfolio</a> (🔐)</li>
           </ul>
        </article>
    </div>
    ';
echo'</div>';

include '../php/footer.php';
?>
