<?php
//looping foreach
echo "lagu anak singa. <br>";
$jumlah = 240;
$setengah = $jumlah / 2;
$data = range($jumlah, 1);
foreach ($data as $a) {
    echo "tek kotek kotek kotek anak singa turun berkotek, anak singa turunlah $a <br>";
    
    $sisa = $a - 1;
    if ($sisa > 0) {
        echo "mati satu tinggallah $sisa <br>";
    } else {
        echo "mati satu tinggallah induknya <br>";
    }

    if ($a == $setengah){
        echo "induk singa berkata: anak ku kemana? kenapa tinggal setengahnya? main kemana mereka? <br>";
    }
}
?>