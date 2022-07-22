# Golang

Go adalah bahasa pemrograman yang diproduksi oleh Google. Dengan tata bahasa yang sederhana, mudah dipelajari dan cocok untuk pengembangan tim. Ciri lainnya adalah kecepatannya. Ini juga merupakan bahasa yang semakin populer; digunakan oleh semua orang mulai dari startup, yang mengutamakan kecepatan pengembangan, hingga pengembangan sistem berskala besar

# Bagian 1

## Struktur Program

- definisi package (package <package_name>)
- definisi function (func main() {})
- komentar (// atau /_ multi line _/)

## Tipe Data

- string ("ini adalah string") => kalimat
- integer (1, 2, 3 ...) => angka
- Boolean (true dan false)

## Perhitungan (operator)

- Aritmatika (+, -, \*, /, %) => matematika pada umumnya
- Mengabungkan string ("ini" + "ini) => iniini

## Variable

anggap variable sebagai box tempat yang dapat menyimpan nilai. Selain itu, kotak (variable) memiliki nama yang dapat digunakan untuk mengambil nilai (value) dari variable kapan saja

penggunaan :
=> deklarasi (var <name> <type>)
=> deklarasi dan penetepan nilai (var <name> <type> = <value>)
=> deklarasi dan penetepan nilai singkat (<name> := <value>)
=> memperbarui nilai (<name> = <update_value>)

-> hanya satu kali deklarasi dan gunakan!
-> buat variable baru panggil jangan dibalik!
-> tipe yang diupdate beda dengan yang dideklarasi (error)

## Self Asignment

-> menjumlahkan dengan yang sudah dideklarasikan (n = n + <value>)

// Penyingkatan (Opearator aritmatika)
=> n = n + <value> -> n += <value>
=> (n = n + 1 // n++) dan (n = n - 1 // n--)

## Alur Kontrol

-> if, else if, else
-> deklarasi, syarat, menjadi hasil
-> memakai operator perbandingan (>, >=, <, <=, ==, !=)
-> menghasilkan boolean
-> operator gabungan bersyarat (&& (harus kiri dan kanan == true), || (satu saja == true), ! (tidak))

=> switch (sama seperti if namun lebih simple)

# Bagian 2

## Import Package

=> import "<package_name>"

## Standar Output

=> fmt.Println()
=> fmt.Printf("ini adalah %<kode>", <value>)
=> (%s = string, %d = integer)
=> karakter \n (enter)

## Perulangan (Loop)

=> for
=> deklarasi, syarat, (menjadi hasil), update

## beberapa package import

=> math/rand => rand.Intn(<value>) atau rand.Seed(<value>) => mengacak nilai
=> time => time.Now().Unix() => waktu sekarang unix

# Bagian 3

## Standar Input

=> fmt.Scan()

## Function

function adalah sekumpulan proses. Jika kita menggabungkan proses-proses dalam sebuah function, nantinya kita dapat menggunakannya sebanyak apa pun yang kita inginkan

penggunaan :
=> deklarasi function (func <name_function>() {})
=> memanggil function (<name_function>())
=> menerima argument (func <name_function>(<argument> <type>) {})
=> nilai return (func <name_function>(<argument> <type_argument>) <type_return> {})

# Bagian 4

## Alamat Memori

-> mengambil value (<variable>) // value
-> mengambil alamat memori (&<variable>) // alamat
-> membuat alamat ke variable (var pointer \*string = &<variable>) // alamat
-> mengambil nilai dari variable pointer (\*pointer) // value

=> Pass by Value (Isinya)
=> Pass by Reference (Alamat Memorinya)

## LULUS

https://progate.com/course_certificate/bfeeaa5erfeics
