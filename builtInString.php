<?php

$str = "Belajar PHP ternyata Menyenangkan";
echo strtolower($str); //ubah huruf ke kecil semua 
echo "<br>";
echo strtoupper($str); //ubah huruf ke Besar semua 
echo "<br>";
echo str_replace("Menyenangkan","Mudah lho", $str);//mengganti string
?>