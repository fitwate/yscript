package main

import (
	"fmt"
)

func for_test() int {
	sum := 0
	for i := 1; i <= 100; i++ {
		sum += i
	}

	return sum
}

func main() {
	fmt.Println(for_test())
}
