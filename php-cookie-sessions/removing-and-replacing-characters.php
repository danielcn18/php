<?php 
    $text = "/images/uploads/";
    echo trim($text, "/");
    echo ltrim($text, "/");
    echo rtrim($text, "/");
    echo str_replace("images","img", $text);
    echo str_ireplace("IMAGES", "img", $text);
    echo str_replace("","", $text);
    echo str_ireplace("","", $text);

?>