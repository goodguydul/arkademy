<!-- Diberikan sebuah variabel yang berisikan bilangan integer dengan ketentuan angka 0(nol) dalam variabel tersebut merupakan pemisah antara satu bilangan dengan bilangan lainnya. Bilangan-bilangan tersebut akan dipisah dan diurutkan berdasarkan angka di bilangan-bilangan itu sendiri. Setelah itu, bilangan hasil sort akan digabung kembali dengan tanpa pemisah dengan output berupa bilangan integer.
 -->
<?php 

    function soalKeempat($value){

        $temp2  = "";
        if (strpos($value, '0') !== false) {
            $temp   = explode('0', $value);
            foreach ($temp as $key) {

                $stringParts = str_split($key);
                sort($stringParts);
                $temp2      .= implode('', $stringParts);

            }
        }else{
            $stringParts = str_split($value);
            sort($stringParts);
            $temp2      .= implode('', $stringParts);
        }
        return $temp2;
    }

echo soalKeempat("5956560159466056");

?>