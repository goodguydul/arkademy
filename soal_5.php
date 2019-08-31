<?php
function sampling($chars, $size, $combinations = array()){

    if (empty($combinations)){
        $combinations = $chars;
    }

    if ($size == 1){
        return $combinations;
    }

    $new_combinations = array();

    foreach ($combinations as $combination){
        foreach ($chars as $char){
            $new_combinations[] = $combination . $char;
        }
    }
    return sampling($chars, $size - 1, $new_combinations);
}

function splitbyPattern($inputSting, $pattern){
    $patternLength = array();
    foreach ($pattern as $length){

        if (!in_array(strlen($length) , $patternLength))
        {
            array_push($patternLength, strlen($length));
        }
    }
    $combination = sampling($patternLength, count($patternLength));
    $MatchOutput = Array();

    foreach ($combination as $comp){
        $intlen = 0;
        $MatchNotfound = true;
        $value = "";

        foreach (str_split($comp, 1) as $length){
            if ($intlen <= strlen($inputSting)){

                if (in_array(substr($inputSting, $intlen, $length) , $pattern)){
                    $value = $value . substr($inputSting, $intlen, $length) . ',';
                }
                else{
                    $MatchNotfound = false;
                    break;
                }
            }
            else{
                break;
            }
            $intlen = $intlen + $length;
        }
        if ($MatchNotfound){
            array_push($MatchOutput, substr($value, 0, strlen($value) - 1));
        }
    }
    return array_unique($MatchOutput);
}

$inputSting = "programmerit";
$pattern = ['pro', 'gram', 'merit', 'program', 'programmer', 'it'];
$output = splitbyPattern($inputSting, $pattern);
foreach ($output as $out)
{
    echo $out . "<br>";
}



// function splitString($pattern, $string){

//   $finalResult = $semiResult = $output = array();
//   $cnt = 0;

//   foreach($pattern as $key => $value){
//     $cnt++;
//     if(strpos($string, $value) !== false){

//       if(implode("",$output) != $string){
//           $output[] = $value;
//           if($cnt == count($pattern)) $semiResult[]  = implode(",", $output);
//       }else{
//         $semiResult[]  = implode(",", $output);
//         $output = array();
//         $output[] = $value;
//         if(implode("",$output) != $string){
//           $semiResult[]  = implode(",", $output);
//         }
//       }
//     }
//   }

//   foreach($semiResult as $key => $value){
//     $stackString = explode(",", $value);
//     if(str_replace(",", "", $value) != $string){
//       foreach($pattern as $key => $value){
//         if(!strpos(' '.implode("", $stackString), $value)){
//           $stackString[] = $value;
//         }
//       }
//       if(implode("", $stackString) == $string) $finalResult[] = implode(",", $stackString); 
//     }else{
//         $finalResult[] = $value;
//     }
//   }

//   return $finalResult;
// }

// $pattern = array('pro', 'gram', 'merit', 'program', 'programmer','it');
// $string = "programit";
// echo "<pre>",print_r(splitString($pattern, $string),true),"</pre>";

?>