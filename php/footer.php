<?php
echo "</div>
</body>
<script type='text/javascript'>
    var tlinks = document.getElementsByTagName('a');
    for (var i=0;i<tlinks.length;i++){
        if (tlinks[i].href.indexOf('http://chadlavimoniere.com') == -1 && tlinks[i].href.indexOf('http://chadlavi.club') == -1) {
            tlinks[i].setAttribute('target', '_blank');
        }                
    }
</script>
</html>";
?>
