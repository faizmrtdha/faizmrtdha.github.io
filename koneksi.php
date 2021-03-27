<?php
$koneksi = mysqli_connect("sql313.epizy.com","epiz_28175723","wkwk123wkwk","tugasakhir");

// check connection
if (mysqli_connect_error()){
	echo "Koneksi database gagal : " . mysqli_connect_error;
}
?>