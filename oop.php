<?php
class Menu
{
    // property
    public $name;

    //   method
    public function hello()
    {
        echo "Saya adalah {$this->name}";
    }

    // method yang dipanggil otomatis saat membuat objek
    public function __construct($argument)
    {
        $this->name = $argument;
        echo "Sebuah instance telah diciptakan.";
    }
}

// object
$curry = new Menu("Gulai");
$pasta = new Menu("Pasta");

// Mengganti value property
$curry->name = 'GULAI';
$pasta->name = 'PASTA';

// memanggil method
$curry->hello();
echo '<br>';
$pasta->hello();
