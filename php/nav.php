<?php
echo '<!-- Google Tag Manager (noscript) --> <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PHQGJWR" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> <!-- End Google Tag Manager (noscript) -->
<div class="navwrap">
    <script type="text/javascript">
        document.addEventListener(\'DOMContentLoaded\', () => {

          // Get all "navbar-burger" elements
          const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll(\'.navbar-burger\'), 0);
        
          // Check if there are any navbar burgers
          if ($navbarBurgers.length > 0) {
        
            // Add a click event on each of them
            $navbarBurgers.forEach( el => {
              el.addEventListener(\'click\', () => {
        
                // Get the target from the "data-target" attribute
                const target = el.dataset.target;
                const $target = document.getElementById(target);
        
                // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                el.classList.toggle(\'is-active\');
                $target.classList.toggle(\'is-active\');
        
              });
            });
          }
        
        });
    </script>
    <nav class="navbar is-fixed-top">
        <div class="navbar-brand">
            <a class="navbar-item"  href="/" title="home" alt="home">Chad Lavimoniere</a>
            <a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
               <span aria-hidden="true"></span>
               <span aria-hidden="true"></span>
               <span aria-hidden="true"></span>
            </a>
        </div>
        <div class="navbar-end">
            <div class="navbar-menu" id="navMenu">
                <a class="navbar-item navbar-end" href="/about" title="about" alt="about">🙋‍♂️ About me</a>
                <a class="navbar-item navbar-end" href="/contact" title="contact" alt="contact">📬 Contact</a>
                <a class="navbar-item navbar-end" href="/portfolio" title="portfolio" alt="portfolio">💼 Portfolio</a>
            </div>
        </div>
    </nav>
</div>';
?>
