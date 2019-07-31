package main

import (
	"fmt"
	"time"
)

func goroute_func(a int) {
	fmt.Println(a)
}

func goroute_test() {
	for i := 1; i <= 100; i++ {
		go goroute_func(i)
	}
	time.Sleep(time.Second)
}
