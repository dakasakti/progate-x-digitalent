# PHP

## Bagian 1

- Menampilkan ke layar (echo "<value>";)
- Komentar (// Ini line komentar)

## Tipe Data

- String ("Ini adalah String") => kata atau kalimat
- Integer dan Float (1, 2, 3) => angka
- Boolean (True, False)

## Perhitungan

- Aritmatika (+, -, \*, /, %) => operator

## Variable

Variable diibaratkan kotak untuk menyimpan data. Kita mendefinisikan variable dengan menambah simbol $ diawal. Semua tipe data dapat disimpan menggunakan sintaksis $variableName = nilai;

Perbarui variable

- $x = 3, $y = 3
- echo ++$x // hasilnya 4 => sebelum sudah ditambah
- echo $y++ // hasilnya 3 => setelah baru ditambah

## Mengabungkan String

- echo "Satu" . "Dua";

## Substitusi Variable

- $x = "Name"
- echo "Halo, {$x}";

## Statement

- if, elseif, else
- Operator Membandingkan (==, ===, !=, !==, >, >=, <, <=)
- Menghasilkan boolean (true, false)
- Mengabungkan statement (AND atau OR)

- Switch (Simple dari elseif)

## Array

Anda dapat menyimpan beberapa nilai secara bersamaan menggunakan array, sedangkan variable hanya dapat menangani satu nilai seperti yang kita pelajari sebelumnya. Sebuah array dapat dibayangkan seperti kotak dengan partisi didalamnya; setiap ruang berisi data, dan nama untuk setiap ruang diberi nomor index (0, 1, 2…).

- Array Index (Angka)
- Membuat Array ($name = array("Pertama", "Kedua") atau $name = ["Pertama", "Kedua"])
- Akses Array (echo $name["index"])
- Menambah Array ($name[] = "yang Baru")
- Mengubah element Array ($name["index"] = "Ini valuenya berubah")

- Array Associative (Key dan Value)
- Membuat Array ($name = array("key" => "value", "key" => "value") atau $name = ["key" => "value", "key" => "value"])
- Akses Array (echo $name["key"])
- Menambah Array ($name["key"] = "yang Baru")
- Mengubah element Array ($name["key"] = "Ini valuenya berubah")

## Loop (Perulangan)

- For (Deklarasi, Syarat, Perubahan = Hasil)
- Sintaks (for ($i = 1; $i < 10; $i++) {"Hasil"})
- While (Syarat = Hasil, Perubahan)
- Break dan Continue (Menghentikan dan Melanjutkan)
- Foreach (Khusus Array Associative) => (foreach ($array as $key => $value) atau $key nya dihilangkan jika tidak butuh)

## Function

Function adalah bagian code yang dirancang untuk menyelesaikan tugas tertentu dan mereturn hasil. Beberapa function umum dan berguna sudah tertanam di PHP; function ini disebut built-in function.

- Strlen("Panjang Huruf") => 13
- Count("Menghitung") => 1
- Rand(1, 4) => mengacak 1 - 4
- Membuat function (function <name_function>(<parameter>) {<hasil>})
- Memanggil function (<name_function>())
- Nilai return (mengembalikan nilai pada function bukan echo) => ($sum = function tambah(1, 2) {return 1 + 2;})

## Form
