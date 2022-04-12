<?php
// declaration of the $new_location variable
$new_location = "";

// redirect to the new location
function redirect_to($new_location) {
    header("Location: " . $new_location);
    exit;
}
redirect_to($new_location);
?>