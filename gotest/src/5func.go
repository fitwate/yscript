package main

import (
	"fmt"
)

func test1() {
	fmt.Println("无参数无返回值")
}

func test2(v1 int, v2 int) {
	fmt.Println("有参数无返回")
	fmt.Println(v1, v2)
}

func test3(args ...int) {
	for _, n := range args {
		fmt.Println(n)
	}
}

func test4() (a int, str string) {
	a = 666
	str = "无参数有返回值"
	return
}

func test5(num1 int, num2 int) (min int, max int) {
	if num1 > num2 {
		min = num2
		max = num1
	} else {
		min = num1
		max = num2
	}
	return
}

func test6(ptr *int) {
	*ptr = 20
}

func test61(ptr int) {
	ptr = 30
}

func func_test() {
	test1()
	test2(1, 2)
	test3(11, 22, 33, 44, 55)
	a, str := test4()
	fmt.Println(a, str)
	min_key, max_key := test5(10, 200)
	fmt.Println(min_key, max_key)

	//引用传递
	fmt.Println("\n引用传递")
	b := 10
	test6(&b)
	fmt.Println(b)
	test61(b)
	fmt.Println(b)
}