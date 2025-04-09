<?php

$nizBrojeva =[22,53,36,46,13 ];
foreach ($nizBrojeva as $broj) {
    if  ($broj % 9 == 0 ) {
        continue;
    }
    echo $broj;
}
?>