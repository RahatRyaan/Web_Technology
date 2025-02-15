<?php
//first
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";;
}

//middle
$counter = 1;
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "$counter ";
        $counter++;
    }
    echo "\n";;
}

// last
$letter = 'A';
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "$letter ";
        $letter++;
    }
    echo "\n";;
}
?>
