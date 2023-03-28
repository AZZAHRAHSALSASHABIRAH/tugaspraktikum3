<?php

// Buat Loop
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}

// Buat Looping Pertama
echo "<h3>loopimg Pertama</h3>";

for ($i= 2; $i <=20; $i += 2){
    echo $i . " - I LOVE PHP <br>";
}

// Buat Looping Kedua
echo "<h3>loopimg Kedua</h3>";

for ($i= 20; $i >=2; $i -= 2){
    echo $i . " - I LOVE PHP <br>";
}


// Buat Array
$buah = ["Anggur", "Mangga", "Melon"];

foreach ($buah as $b) {
    echo $b ."<br>" ;
}
?>