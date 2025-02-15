<?php
    function recourse($Tier, $a){
        if ($Tier == 2){
            echo "Извесняк", $a;
        } else if ($Tier == 3){
            $b = $a*2;
            echo "Извесняк", $a;
            echo "Пещаник", $b;
        } else if ($Tier == 4){
            $c = $a*2;
            $b = $a*2;
            $d = $b*2;
            echo "Извесняк", $d;
            echo "Пещаник", $b;
            echo "Травентин", $c;
        } else if ($Tier == 5){
            $c = $a*2;
            $d = $a*3;
            $b = $c*2;
            $f = $b*2;
            echo "Извесняк", $f;
            echo "Пещаник", $b;
            echo "Травентин", $c;
            echo "Гранит", $d;
        } else if ($Tier == 6){
            $b = $a*4;
            $c = $a*3;
            $d = $c*2;
            $f = $d*2;
            $e = $f*2;
            echo "Извесняк", $e;
            echo "Пещаник", $f;
            echo "Травентин", $d;
            echo "Гранит", $c;
            echo "Лунний Камень", $b;
        } else if ($Tier == 7){
            $g = $a*5;
            $b = $a*4;
            $c = $b*3;
            $d = $c*2;
            $e = $d*2;
            $f = $e*2;
            echo "Извесняк", $f;
            echo "Пещаник", $e;
            echo "Травентин", $d;
            echo "Гранит", $c;
            echo "Лунний Камень", $b;
            echo "Базальт", $g;
        } else if ($Tier == 8){
            $h = $a*5;
            $b = $a*5;
            $c = $b*4;
            $d = $c*3;
            $e = $d*2;
            $f = $e*2;
            $g = $f*2;
            echo "Извесняк", $g; 
            echo "Пещаник", $f;
            echo "Травентин", $e;
            echo "Гранит", $d;
            echo "Лунний Камень", $c;
            echo "Базальт", $b;
            echo "Мрамур", $h;
        } else{
            echo "syntax ERROR";
        }
    }
    
    
    $Tier = 8;
    $a = 2;
    recourse($Tier, $a)
?>
