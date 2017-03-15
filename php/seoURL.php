<?php
function seoUrl($string) {
    $string = strtolower($string);
    $string = preg_replace('/[^a-z0-9_\s-]/', '', $string);
    $string = preg_replace('/[\s-]+/', ' ', $string);
    $string = preg_replace('/[\s_]/', '-', $string);
    return $string;
}
?>
