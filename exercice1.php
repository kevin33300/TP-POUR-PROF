<?php

    $string ="coucou ça va ?";
    $newstring=" ";
    echo strlen($string);
    for ($i=strlen-1($string);$i>=0;$i--) {
        $newstring.="$string[$i]";
    }
    echo ($newstring);
 
    