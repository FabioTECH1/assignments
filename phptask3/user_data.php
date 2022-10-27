<?php

$mydatafile = fopen('userdata.csv', 'w');

foreach ($_POST as $post) {
    $data = $post . "\n";
    fwrite($mydatafile, $data);
}
fclose($mydatafile);

print_r($_POST);