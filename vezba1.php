<?php

$automobili =
["Audi","Bmw","Mercedes"];

foreach ($automobili as $automobil){
    if ($automobil == "Bmw") {
        continue; // preskoci clan niza  
    }
    echo $automobil;
}

    

