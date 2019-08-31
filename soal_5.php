<?php
function sampling($chars, $size, $kombs = array()){

    if (empty($kombs)){
        $kombs = $chars;
    }

    if ($size == 1){
        return $kombs;
    }

    $new_kombs = array();

    foreach ($kombs as $komb){
        foreach ($chars as $char){
            $new_kombs[] = $komb . $char;
        }
    }
    return sampling($chars, $size - 1, $new_kombs);
}

function split($inputSting, $pattern){
    $pLength = array();
    foreach ($pattern as $length){

        if (!in_array(strlen($length) , $pLength))
        {
            array_push($pLength, strlen($length));
        }
    }
    $komb = sampling($pLength, count($pLength));
    $hasil = Array();

    foreach ($komb as $comp){
        $intlen = 0;
        $mbuh = true;
        $value = "";

        foreach (str_split($comp, 1) as $length){
            if ($intlen <= strlen($inputSting)){

                if (in_array(substr($inputSting, $intlen, $length) , $pattern)){
                    $value = $value . substr($inputSting, $intlen, $length) . ',';
                }
                else{
                    $mbuh = false;
                    break;
                }
            }
            else{
                break;
            }
            $intlen = $intlen + $length;
        }
        if ($mbuh){
            array_push($hasil, substr($value, 0, strlen($value) - 1));
        }
    }
    return array_unique($hasil);
}

$inputSting = "programmerit";
$pattern = ['pro', 'gram', 'merit', 'program', 'programmer', 'it'];
$output = split($inputSting, $pattern);

foreach ($output as $out){
    echo $out . "<br>";
}


?>