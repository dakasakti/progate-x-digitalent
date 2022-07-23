<?php

// 1
// Ketik code Anda dibawah
echo "Hello, PHP" . PHP_EOL;
echo "10 + 7" . PHP_EOL;

// 2
$name = 'Tom';
echo 'Nilai $name: ' . $name;
echo '<br>';
echo '-----';
echo '<br>';

// Ketik code Anda dibawah
echo "Nama saya adalah ${name}";

// 3
$price = 10;
$taxRate = 0.08;
echo 'Nilai $price: ' . $price;
echo '<br>';
echo 'Nilai $taxRate: ' . $taxRate;
echo '<br>';
echo '-----';
echo '<br>';

// Ketik code Anda dibawah
$price += ($price * $taxRate);
echo "Harga setelah pajak adalah $$price";

// 4
$money = 20;
$price = 10;
$taxRate = 0.08;
echo 'Nilai $money: ' . $money;
echo '<br>';
echo 'Nilai $price: ' . $price;
echo '<br>';
echo 'Nilai $taxRate: ' . $taxRate;
echo '<br>';
echo '-----';
echo '<br>';

// Ketik code Anda dibawah
$beli = $price + ($price * $taxRate);

if ($money > $beli) {
    echo "Anda dapat membeli item ini";
} elseif ($money == $beli) {
    echo "Anda dapat membeli item ini, tetapi uang Anda akan habis";
} else {
    echo "Anda tidak dapat membeli item ini";
}

// 5 (FizzBuzz)
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz";
        echo "<br>";
    } elseif ($i % 3 == 0) {
        echo "Fizz";
        echo "<br>";
    } elseif ($i % 5 == 0) {
        echo "Buzz";
        echo "<br>";
    } else {
        echo $i;
        echo "<br>";
    }
}

// 6
$prices = array(10, 6, 7, 8);
echo 'Nilai $prices: ';

$hitung = 0;
foreach ($prices as $price) {
    // Code
    $hitung += $price;
    echo $price . ' ';
}
echo '<br>';
echo '-----';
echo '<br>';

// Ketik code Anda dibawah
$max = max($prices);
echo "Harga total adalah $$hitung";

// 7 (Nilai Max)
$prices = array(10, 6, 7, 8);
echo 'Nilai $prices: ';

$hitung = 0;
foreach ($prices as $price) {
    // Code
    $hitung += $price;
    echo $price . ' ';
}
echo '<br>';
echo '-----';
echo '<br>';

// Ketik code Anda dibawah
echo "Harga total adalah $$hitung";
echo '<br>';

$max = max($prices);
echo "Harga termahal adalah $$max";


// 8 (Display Isi Array)
$menu = array('name' => 'GULAI', 'price' => 9);
echo 'Nilai $menu: ';
// var_export adalah function untuk melihat isi variable
var_export($menu);
echo '<br>';
echo '-----';
echo '<br>';

// Ketik code Anda dibawah
$harga = $menu["price"];
echo "{$menu["name"]} berharga $$harga";

// 9 (Display Isi Array)
$menus = array(
    array('name' => 'GULAI', 'price' => 9),
    array('name' => 'PASTA', 'price' => 12),
    array('name' => 'KOPI', 'price' => 6)
);

// Ketik code Anda dibawah
for ($i = 0; $i < count($menus); $i++) {
    echo $menus[$i]["name"] . " berharga $" . $menus[$i]["price"];
    echo "<br>";
}

// 10 (total harga)
$menus = array(
    array('name' => 'GULAI', 'price' => 9),
    array('name' => 'PASTA', 'price' => 12),
    array('name' => 'KOPI', 'price' => 6)
);

// Ketik code Anda dibawah
$total = 0;
for ($i = 0; $i < count($menus); $i++) {
    $total += $menus[$i]["price"];
    echo $menus[$i]["name"] . " berharga $" . $menus[$i]["price"];
    echo "<br>";
}

echo "Harga total adalah $$total";

// 11 (harga max)
$menus = array(
    array('name' => 'GULAI', 'price' => 9),
    array('name' => 'PASTA', 'price' => 12),
    array('name' => 'KOPI', 'price' => 6)
);

// Ketik code Anda dibawah
$total = 0;
$name = "";
$max = 0;

for ($i = 0; $i < count($menus); $i++) {
    if ($menus[$i]["price"] > $max) {
        $max = $menus[$i]["price"];
        $name = $menus[$i]["name"];
    }

    $total += $menus[$i]["price"];
    echo $menus[$i]["name"] . " berharga $" . $menus[$i]["price"];
    echo "<br>";
}

echo "Harga total adalah $$total";
echo "<br>";
echo "Harga item termahal adalah $name dengan harga $$max";
