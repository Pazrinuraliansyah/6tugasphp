<?php
$nilai=0;
    for($bilangan=3;$bilangan<=127;$bilangan++){
    if ($bilangan % 6 ==0){
$nilai++;
    }
}
echo"banyaknya bilangan bulat dari 3 sampai 127 kelipatan 6 = ". $nilai;

?>