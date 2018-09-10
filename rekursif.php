<?php
	function rekursif($kolom){
		$a = 0;
		rekursif2($a, $kolom);
		echo "<br>";
		if (--$kolom > $a){
			rekursif($kolom);
		}
	}
	function rekursif2($b, $kolom) {
		$a = 0;
		if ( $b > $a - $kolom) {
			echo "*";
			rekursif2($b - 1, $kolom);
		}
	}

	rekursif(5);

	echo "<br>";
	echo "=============================";
	echo "<br>";

	function rek($x, $y) {
		$kol = 5;
		rek2($kol, $x, $y);
		echo "<br>";
		if (++$x < $kol) {
			rek($x, $y);
		}
	}

	function rek2 ($w, $x, $z){
		$kol = 5;
		if ($w > $kol - $x - 1) {
			echo "$z";
			rek2($w - 1, $x, $z + 1);
		}
	}


	rek(0,1);


?>
