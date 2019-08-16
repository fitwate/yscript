package main

import (
	"fmt"
	"strconv"
)

func main() {
	testInt := 2
	testStr := "22"

	//fmt.Println(testInt + testStr)
	fmt.Println(strconv.Itoa(testInt) + testStr)
	res, _ := strconv.Atoi(testStr)
	fmt.Println(testInt + res)
}
