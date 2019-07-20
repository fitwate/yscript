package main

import(
	"fmt"
)

func main() {
	var a int
	var b *int
	a = 10
	b = &a
	fmt.Println(a)
	fmt.Println(b)
	fmt.Println(*b)

	*b = 20
	fmt.Println(a)
}