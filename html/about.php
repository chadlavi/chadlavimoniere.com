<?php
$title = 'About Chad Lavimoniere';
$meta = 'Chad Lavimoniere is a UX/UI designer and creative technologist based in Brooklyn, NY';
$og_image = 'http://chadlavimoniere.com/images/headshot.png';
$keywords = 'UX, User Experience Design, Web Design, prototyping';
include '../php/gzip.php';
include '../php/header.php';

echo '<body class="">';

include '../php/nav.php';

echo '<div class="container section">';
echo '
    <h1 class="title">About Me</h1>
    <div class="container is-flex-desktop">
        <article class="media box is-shadowless">        
            <div class="media-left is-hidden-touch">
            <figure class="image is-96x96">
                <img src="/images/headshot.png" class="is-rounded" alt="image of the author" title="yep, that\'s me">
            </figure>
            </div>
            <div class="media-content">
                <p class="content">I\'m a Product designer, creative technologist, and frontend hack with nearly a decade\'s experience building ecommerce sites, B2B web apps, and design tools.</p>
                <p class="content">I live in Brooklyn with my wife, dog, sourdough starter, 29 houseplants, and three raspberry pis (two pi0ws, one 2b+. Ask me about \'em!).</p>
            </div>
        </article>
        <article class="box">
            <h2 class="subtitle">Links</h2> 
            <h3 class="heading">github</h3>
            <a class="content is-block"  href="https://github.com/chadlavi">https://github.com/chadlavi</a>
            <a class="content is-block"  href="https://github.com/chadlavi-casebook">https://github.com/chadlavi-casebook</a>
            <h3 class="heading">linkedin</h3>
            <a class="content is-block"  href="https://www.linkedin.com/in/chadlavimoniere/">https://www.linkedin.com/in/chadlavimoniere/</a>
            <h3 class="heading">portfolio 🔒*</h3>
            <p class="content is-block"><a target="_blank" href="/portfolio">http://chadlavimoniere.com/portfolio</a> </p>
            <p class="is-size-7 content">* password protected, but the source code for this site is on github, so if you\'re clever, you can find it</p>
        </article>
    </div>
    ';
echo'</div>';

include '../php/footer.php';
?>
