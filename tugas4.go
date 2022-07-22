package main

import "fmt"

func main() {
	totalScore := 0
	array := []string{"anjing", "kucing", "ikan"}

	for i, v := range array {
		ask(i+1, v, &totalScore)
	}

	fmt.Println("Skor", totalScore)
}

func ask(number int, question string, scorePtr *int) {
	var input string
	fmt.Printf("[Pertanyaan %d] Silahkan masukkan kata berikut: %s\n", number, question)
	fmt.Scan(&input)

	if question == input {
		fmt.Println("Benar!")
		*scorePtr += 10
	} else {
		fmt.Println("Salah!")
	}
}
