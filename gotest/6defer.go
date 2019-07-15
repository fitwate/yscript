package main

import (
	"fmt"
)

func test(x int){
	fmt.Println(100/x)
}

func main(){
	defer fmt.Println("11111111111111")
	defer fmt.Println("2222222222222222")
	//defer test(5)
	test(0)
	defer fmt.Println("3333333333333333333")
	fmt.Println("aaaaaaaaaaaaaaaaaaa")
}