package main

import(
	"io/ioutil"
	"fmt"
)

func switch_test(test_key int)string {
	res := ""
	switch{
	case test_key < 0 || test_key > 100:
		res = "input error"
	case test_key < 60:
		res = "C"
	case test_key < 90:
		res = "B"
	case test_key <= 100:
		res = "A"
	}

	return res
}

func main(){
	const filename = "4if_for.go"
	contents, err := ioutil.ReadFile(filename)
	if err != nil {
		fmt.Println(err)
	}else{
		fmt.Printf("%s\n", contents)
	}

	switch_res := switch_test(91)
	fmt.Println(switch_res)
}