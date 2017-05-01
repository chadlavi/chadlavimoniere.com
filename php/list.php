<?php
echo '<li>
<a href="/article/' . $row['id'] . '/' . seoUrl($row['name']) . '">' . $row['name'] . '</a>
<div class="background">';
if (!empty($row['image_url'])) {
    echo '<img src="' . $row['image_url'] . '">';
}
echo '</div></li>';
?>
