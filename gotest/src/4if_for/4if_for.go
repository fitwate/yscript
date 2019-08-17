package main

import (
	"fmt"
	"io/ioutil"
)

func switch_test(test_key int) string {
	res := ""
	switch {
	case test_key < 0 || test_key > 100:
		res = "input error"
		fallthrough
	case test_key < 60:
		res = "C"
	case test_key < 90:
		res = "B"
	case test_key <= 100:
		res = "A"
	}

	return res
}

func for_test() int {
	sum := 0
	for i := 1; i <= 100; i++ {
		sum += i
	}
	return sum
}

func main() {
	const filename = "4if_for.go"
	contents, err := ioutil.ReadFile(filename)
	if err != nil {
		fmt.Println(err)
	} else {
		fmt.Printf("%s\n", contents)
	}

	switch_res := switch_test(91)
	fmt.Println(switch_res)
	fmt.Println(for_test())

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
