<?php
$array = [10, 20, 30, 40, 50];
$search = 30;

$found = 0;
foreach ($array as $element) {
    if ($element == $search) {
        $found = 1;
        break;
    }
}

if ($found) {
    echo "$search found";
} else {
    echo "$search not found";
}
?>
