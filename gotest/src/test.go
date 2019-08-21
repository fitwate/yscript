package main

import (
	"fmt"
)

func multi() {
	for i := 0; i <= 8; i++ {
		for j := 0; j <= i; j++ {
			fmt.Printf("%d x %d = %d ", (j + 1), (i + 1), (i+1)*(j+1))
		}
		fmt.Println()
	}

}

func main() {
	multi()

}
