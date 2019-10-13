<?php
    $nama = array("lamirme","aduh","qifuat","toda","anevi","samid","kifuat");
    echo "berikut nama-nama sebelum diurutkan berdasarkan abjad : ";
    for ($i=0; $i<7;$i++){
        echo $name[$i];
        echo ", ";
    }
    echo " \n";
    sort($nama);
    $a = count($nama);
    echo "berikut nama-nama setelah diurutkan berdasarkan abjad : ";
    for ($i=0; $i<7;$i++){
        echo $nama[$i];
        echo ", ";
    }
    echo "\n";
?>