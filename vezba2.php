<?php

$rezultat =0;
$nizBrojeva =[22,53,36,46,13 ];
foreach ($nizBrojeva as $broj) {
   
   if ($broj %9  ==0)
     {
        continue;
    }
    {
        $rezultat += $broj; // 22,22+53,75+46
    }
   
}
echo $rezultat;
?>

