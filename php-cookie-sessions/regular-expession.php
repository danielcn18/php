<?php
    $text = "Using PHP's regular expression functions";
    $path = "code/section_b/c05/";
    echo preg_match("/PHP/", $text, $match);
    echo preg_split("/\//", $text);
    
?>