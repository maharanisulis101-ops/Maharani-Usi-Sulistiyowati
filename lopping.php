<?php
//looping for
echo "lagu anak singa. <br>";
$jumlah = 240;
$setengah = $jumlah / 2;
for ($i = $jumlah; $i > 0; $i--) {
    echo "tek kotek kotek kotek anak singa turun berkotek, anak singa turunlah $i <br>";
    
    $sisa = $i - 1;
    if ($sisa > 0) {
        echo "mati satu tinggallah $sisa <br>";
    } else {
        echo "mati satu tinggallah induknya <br>";
    }

    if ($i == $setengah){
        echo "induk singa berkata: anak ku kemana? kenapa tinggal setengahnya? main kemana mereka? <br>";
    }
}
echo "<hr>";

//looping while
echo "lagu anak singa. <br>";
$i = $jumlah;
while ($i > 0) {
    echo "tek kotek kotek kotek anak singa turun berkotek, anak singa turunlah $i <br>";
    
    $sisa = $i - 1;
    if ($sisa > 0) {
        echo "mati satu tinggallah $sisa <br>";
    } else {
        echo "mati satu tinggallah induknya <br>";
    }

    if ($i == $setengah){
        echo "induk singa berkata: anak ku kemana? kenapa tinggal setengahnya? main kemana mereka? <br>";
    }
    $i--;
}
echo "<hr>";

//looping do while
echo "lagu anak singa. <br>";
$i = $jumlah;
do {
    echo "tek kotek kotek kotek anak singa turun berkotek, anak singa turunlah $i <br>";
    
    $sisa = $i - 1;
    if ($sisa > 0) {
        echo "mati satu tinggallah $sisa <br>";
    } else {
        echo "mati satu tinggallah induknya <br>";
    }

    if ($i == $setengah){
        echo "induk singa berkata: anak ku kemana? kenapa tinggal setengahnya? main kemana mereka? <br>";
    }
    $i--;
} while ($i > 0);
echo "<hr>";

//looping foreach
echo "lagu anak singa. <br>";
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