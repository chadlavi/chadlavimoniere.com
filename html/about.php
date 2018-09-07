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
    <h1 class="title">About Me</h1>
    <div class="container is-fluid section is-flex-desktop">
        <article class="media box is-shadowless">        
            <div class="media-left is-hidden-touch">
            <figure class="image is-128x128">
                <img src="/images/headshot.png" class="is-rounded" alt="image of the author" title="yep, that\'s me">
            </figure>
            </div>
            <div class="media-content">
                <p class="content">I\'m a Product designer, creative technologist, and frontend hack with nearly a decade\'s experience building ecommerce sites, B2B web apps, and design tools.</p>
                <p class="content">I live in Brooklyn with my wife, dog, sourdough starter, 29 houseplants, and three raspberry pis (two pi0ws, one 2b+. Ask me about \'em!).</p>
                <p class="content"></p>
            </div>
        </article>
        <article class="box">
            <h2 class="subtitle">Links</h2> 
            <h2 class="heading">github</h2>
            <a class="content is-block" target="_blank" href="https://github.com/chadlavi">https://github.com/chadlavi</a>
            <h2 class="heading">linkedin</h2>
            <a class="content is-block" target="_blank" href="https://www.linkedin.com/in/chadlavimoniere/">https://www.linkedin.com/in/chadlavimoniere/</a>
            <h2 class="heading">portfolio</h2>
            <p class="content is-block"><a target="_blank" href="/portfolio">http://chadlavimoniere.com/portfolio</a> (🔐*)</p>
            <p class="is-size-7 content">* but the source code for this site is on github, so if you\'re clever, you can find it</p>
        </article>
    </div>
    ';
echo'</div>';

include '../php/footer.php';
?>
