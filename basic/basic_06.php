<?php
    // PHP loop
    // while 
    // do
    // for
    // foreach

    $data = [10, 2, 35, 4, 5];
    $loop_count = count($data); // 5
    for ($i=0; $i < $loop_count; $i++) { 
        echo $data[$i]; // index = 0, 1, 2, 3, 4
        echo "<br>";
    }

    echo "<br>";

    foreach ($data as $key => $value) {
        echo "key = {$key} value = {$value}"; // $value = $data[$i]
        echo "<br>";
    }

    
    echo "<br>";
    echo "<a href=\"https://www.w3schools.com/php/php_looping.asp\" target=\"_blank\">ดูเพิ่มเติม</a>";

?>