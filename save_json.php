<?php
    $myFile = "user.json";
    $fh = fopen($myFile, 'wr') or die("can't open file");
    $stringData = $_POST["data"];
    fwrite($fh, $stringData);
    fclose($fh)
?>