<?php
function timezone($date) {
    $datetime = new DateTime($date);
    $target_timezone = new DateTimeZone('America/New_York');
    $datetime->setTimeZone($target_timezone);
    return $datetime->format('Y/m/d h:i A');
}
?>
