<?php 
	function soalKelima($string){
		$pattern = ['pro', 'gram', 'merit', 'program', 'it', 'programmer'];

		foreach ($pattern as $key ) {

			if(strpos($string, $key) !== false) {
				$hasil[] = $key; 
			}

		}
		return $hasil;
	}

echo "<pre>";
print_r(soalKelima("programit"));
echo "</pre>"
?>
