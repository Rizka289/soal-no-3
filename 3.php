<?php 
function cetak_gambar($array){
    $string = ['D','U','M','B','W','A','Y','S','I','D'];
    $nama = array(count($string));
    $var = count($string);
    
    for($a=0; $a < $var; $a++){
        $hasil = "";
        for($b=0; $b < $var; $b++){
            $nama[$b] = "= &nbsp;";
        }
        $nama[$a] = $string[$a];
        $nama[$var - 1 - $a] = $string[$a];
        for($b=0; $b < $var; $b++){
            $hasil .= $nama[$b];
        }
        echo $hasil;
        echo "<br/>";

    } 
      
   
}
print_r(cetak_gambar(""));
?>