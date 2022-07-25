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

# Bagian 2

## OOP

"Object" artinya "objek" dan "oriented" artinya "terpusat"; Object-oriented adalah cara berpikir yang berpusat pada objek. Contohnya, Anda bisa pikirkan sebuah toko atau situs e-commerce sebagai kombinasi objek seperti produk, pengguna, dan keranjang belanja.

### Class dan Object

- Membuat Class (class <name_class> { <value> })
- Membuat Object atau Instance ($name = new <name_class>();)

### Property dan Method

Property adalah data yang dimiliki instance

- Property (name, price)
- => menulis Property (public $name;) => deklarasi
- => mengisikan value ($object->name = "Siapa")
- => menampilkan (echo $object->name;)

method adalah function yang berhubungan dengan instance

- Method (getName, getTotalPrice)
- => menulis method (public function <name_method>() {<value>})
- => memanggil (echo $object-><name_method>();)

### This

Saat Anda ingin mengakses property instance atau method di dalam method, Anda dapat menggunakan variable spesial yang disebut $this. $this hanya dapat digunakan di dalam definisi sebuah method di dalam class. Saat sebuah method dipanggil, $this digantikan oleh sebuah instance yang memanggil method

### Constructor

Jika Anda mendefinisikan method spesial yang bernama \_\_construct(), method ini akan dipanggil secara otomatis saat Anda membuat sebuah instance menggunakan new. Method jenis ini yang dipanggil saat instance baru dibuat disebut constructor.

### Menggunakan file terpisah

- require_once('<name_file>.php')

### Encapsulation

Dari sini, kita akan belajar enkapsulasi. Ini adalah salah satu fungsi penting dari object-oriented programming yang menyembunyikan informasi yang tidak penting untuk pengguna.

Pertama, mari bayangkan enkapsulasi dengan contoh di kehidupan nyata. Sirkuit komputer tersembunyi sehingga pengguna hanya dapat mengoperasikan bagian tertentu seperti keyboard. Menyembunyikan sirkuit (enkapsulasi) menghindari risiko menyentuh sirkuit dan merusak komputer. Dalam pemrograman, prinsip ini disebut "enkapsulasi".

Enkapsulasi adalah pembatasan akses ke method dan property class. Public digunakan untuk mengijinkan akses dari luar class, dan private digunakan untuk membatasi akses. Secara umum, property class dibuat private.

- Getter => getPropertyName() => Mengambil nilai
- Setter => setPropertyName() => Mengubah nilai

### Property dan Method Class (Static)

- => memanggil diluar class (<name_class>::$<name_property>) atau (<name_class>::<name_property>())
- => memanggil didalam class (self::$<name_property>) atau (self::<name_method>())

### Inheritance (Pewarisan)

- => saat membuat class menambahkan (extends)
- => method independent (setter dan getter seperti di kelas parent)

### Instance of

Menggunakan instanceof, kita dapat menentukan apakah instance termasuk class tertentu. Dengan menulis $instanceName instanceof className, code akan me-return true jika instance termasuk ke class yang dispesifikasikan dan false jika sebaliknya.

### Method Overriding (Menggantikan nama method yang sudah ada di parent)

### Property (Public => umum, Private => hanya dalam class, Protected => parent dan anak)

### Parent

Untuk memanggil method yang didefinisikan di dalam class induk saat overriding, kita menggunakan parent sebagai berikut: parent::methodName. Method dari class induk dijalankan ditempat dimana parent::methodName dideskripsikan. Dengan melakukan ini, kita dapat menulis constructor yang kita buat sebelumnya dengan jelas.

### String Query

- => <url>.php?key=value

## LULUS

https://progate.com/course_certificate/7e1da2e2rfkaka
