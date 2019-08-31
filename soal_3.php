<!-- Segitiga siku-siku adalah segitiga yang salah satu sudutnya 90o atau sudut siku. Buatlah sebuah program untuk membentuk sebuah segitiga siku-siku.
 

REQUIREMENT:
Input user berupa panjang alas dan tinggi segitiga (alas dan tingginya sama)dengan ketentuan :
0 < Alas/Tinggi < 10
Segitiga dibentuk dengan angka prima yang nilainya mulai dari awal setiap barisnya.
Output berupa segitiga siku-siku.
 -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="/" method="get">
		<input type="text" name="n">
		<button type="submit">Ok</button>
	</form>
</body>
</html>


<?php 
	
	function getPrime($n){
		$max = 0;
		$x	 = 2;
		while ($max<$n) {
			$prima = true;
			for ($i=2; $i < $x ; $i++) { 
				if ($x % $i ==0) {
					$prima = false;		
				}
			}if ($prima == true) {
				echo $x;
				$max++;
			}$x++;
		}
	}

	if (isset($_GET['n'])){
		for ($n=1; $n <= $_GET['n']; $n++) {
			$a = 0;
			if ($_GET['n']<10) {
				
				getPrime($n);
				echo "<br>";
				
			}else{
				break;
			}	
		} 
	}	
?>