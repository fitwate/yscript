package main

import "fmt"

func test1_var_go(a int, b int) {
	sum := 0
	sum = a + b
	pipe_test1 <- sum
}

func test2_var_go(a int, b int, c chan int) {
	sum := 0
	sum = a + b
	c <- sum
}

var pipe_test1 chan int

func main() {
	pipe := make(chan int, 3)
	pipe <- 1
	pipe <- 2
	pipe <- 3

	var t1 int
	t1 = <-pipe

	pipe <- 4

	fmt.Println(t1)

	fmt.Println(len(pipe))

	//全局channel
	pipe_test1 = make(chan int, 1)
	go test1_var_go(1, 2)
	res1 := <-pipe_test1
	fmt.Println("res1= ", res1)

	//局部变量
	pipe_test2 := make(chan int, 1)
	go test2_var_go(1, 2, pipe_test2)
	res2 := <-pipe_test2
	fmt.Println("res2= ", res2)
}
