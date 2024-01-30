<?php



function generaStringa($lunghezza)
{
    $num = "0123456789";
    $let = "abcdefghijklmnopqrstuvwxyz";
    $special = ".,!{}[]=()<>?^:;";

    $caratteri = $num . $let . $special;
    $lun = strlen($caratteri);
    $pwd = '';
    for ($i = 0; $i < $lunghezza; $i++) {
        $pwd .= $caratteri[rand(0, $lun - 1)];
    }


    return $pwd;
}
