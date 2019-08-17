package main

import (
	"fmt"
)

func main() {
	for i := 1; i <= 15; i++ {
		for j := 1; j <= i; j++ {
			fmt.Printf("A")
		}
		fmt.Println()
	}
	testStr := "abcadfafdadf"
	for k, v := range testStr {
		fmt.Printf("%d, %c, %d \n", k, v, len([]byte(string(v))))
	}
}
