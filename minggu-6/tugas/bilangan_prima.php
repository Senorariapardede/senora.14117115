<?php
	echo "Bilangan Prma dari 1-37 adalah = ";
    for ($i=1; $i<=37; $i++) {
        $j= 0;
        for ($k=1 ;$k<=$i; $k++){
            if ($i % $k == 0){
                $j++;
            }
        }
        if ($j == 2){
            echo $i.' ' ;
        }
    }
?>