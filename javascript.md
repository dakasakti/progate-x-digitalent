# Javascript (ES6)

JavaScript (disingkat JS) adalah bahasa scripting yang menjadi element penting dalam pengembangan web. Saat ini, hampir semua situs web menggunakan JS. JavaScript ES2015 (ES6), yang akan kita bahas pada pelajaran ini, adalah versi terbaru JS yang menjadi populer karena memungkinkan orang untuk coding dengan lebih efisien.

## Menampilkan ke console (bagian 1)

- print console (console.log("String"))

## Jenis

- Kata (string => "ini adalah string")
- Angka (integer => 1)
- Boolean (true, false)

## Mengabungkan

- Kata (string => "satu" + "dua")

## Variable

Anda dapat menganggap variable sebagai "kotak" yang berisi nilai data (string, integer, dsb)

- Membuat Variable Biasa (let <variable_name> = <value_type>;)
- Membuat Variable Constant (const <variable_name> = <value_type>;)
- Memanggil Variable (console.log(<variable_name>);)
- Memanggil Variable dalam String (template literal "tanda backtik diatas tab") (console.log(`ini adalah ${<variable_name>}`))
- Update Variable (<variable_name> = <value_update>;)

Penulisan singkat update aritmatika

- (+=, -=, \*=, /=, %=)

## Percabangan

- if (kondisi => boolean) {} => kondisi true (terpenuhi)
- Kondisi Perbandingan (>, <, >=, <=, ==, !=, ===, !== (sebanding (jenis)))
- else if (kondisi => boolean) {} => kondisi true kedua (if false)
- else {} => kondisi false (tidak terpenuhi)
- Gabungan perbandingan (AND (dan => kiri dan kanan = true) dan OR (atau => satu saja true))
- Switch (sederhananya if) => switch (kondisi) {case <kondisi>: jalankan break => untuk menghentikan}
- Switch default (pengganti else) => {default: jalankan break;}

## Perulangan (bagian 2) => (Looping)

- while => deklarasi while (kondisi) {hasil -> update}
- for => (deklarasi; kondisi; update) {hasil}

## Array (Beberapa nilai)

- Membuat array (const <variable_name> = ["string", 1, "string 2", 2])
- Akses element array menggunakan index yang dimulai angka 0 (console.log(<variable_name>[<index>]))
- Update element array (<variable_name>[<index>] = <update_value>)
- Property Panjang array (property.length) => object

## Object

- Sama seperti array namun berubah tanda {}
- Membuat object (const <variable_name> = {<property> : <value>, <property> : <value>})
- Akses element object menggunakan property bukan index (console.log(<variable_name>.<property>))
- Update element object (<variable_name>.<property> = <update_value>)

## Undefined

- Akses array dan object yang tidak ada

## Function (bagian 3)

- membuat function (const <name_variable> = function() {})
- membuat arrow function (const <name_variable> = () => {})

## Argument

- memberikan isi parameter (const <name_variable> = (<parameter>) => {})

## Nilai Return

- mengembalikan variable sebagai value
- nilai return adalah kode terakhir dieksekusi walaupun dibawahnya ada kode lagi

## Nilai object function (bagian 4)

- property function (method) -> return nilai function

## class (kerangka)

- membuat (class <name_class> {})

## instance (object)

- membuat (const <name_variable> = new <name_class>())

## Constructor (dipanggil pertama waktu pembuatan instance)

- constructor() {}

## This

- membuat property didalam class (this.<property> = <value>)
- memanggil property dan method didalam class

## Inheritance

- membuat extends di class anak

## Overriding

- membuat method sama di class anak
- overriding constructor di class anak harus menambahkan super() di dalam method constuctor() anak;

## memisahkan file (bagian 5)

- Export (export default <name_class>) => difile class dan diakhir code
- export tidak juga memakai class namun bisa property atau method
- export default itu akan otomatis mengakses namanya walaupun di import beda nama
- contoh (import <beda_name> from '<./yang_ditulis_disini')
- export default juga hanya memiliki satu value tidak lebih
- export bernama (export {<name_class>})
- Import Default (import <name_class> from '<./url_class>')
- Import Bernama (import {<name_class>} from '<./url_class>')
- bisa dibuat parameter jika yang di export atau import banyak

## Package

- chalk => menambahkan warna di hasil console
- contoh => import chalk from 'chalk' => console.log(chalk.yellow("Hello World")) => maka warnanya akan berubah

- readline-sync => memasukkan nilai ke console
- contoh => import readline from 'readline-sync' => readline.question("Masukkan Nama :")

## Method Array (bagian 6)

- method push => menambahkan element terakhir pada array. => <variable_array>.push(<value>)
- method forEach => memanggil iterate => <variable_array>.forEach(<parameter> => {console.log(<parameter>)})
- method find => mereturn nilai pertama yang sesuai => <variable_array>.find(<parameter> => {return <parameter> > 3})
- method filter => mereturn semua nilai yang sesuai => sama dengan diatas codenya.
- method map => mereturn nilai yang baru => kita akan mereturn perkalian array pertama atau membuat fullname

## Callback (bagian 7)

Function yang diteruskan ke function lain sebagai argument disebut callback function.

- Jenis argument (string, integer, boolean, function (callback function))
- jangan menambahkan () saat memanggil callback => <namefunction> dan saat di dalam callback baru menggunakan ();
- argument parameter => input diluar dimasukkan.
- argument callback => output didalam dikeluarkan.

## LULUS

https://progate.com/course_certificate/278f69a5rftz6m
