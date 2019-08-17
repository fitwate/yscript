package main

import (
	"fmt"
	"time"
)

func main() {
	now := time.Now()
	fmt.Println(now.Format("2006/1/02 15:04:00"))
	fmt.Println(now.Year())
	fmt.Println(now.Month())
	fmt.Println(now.Day())

	fmt.Println("执行耗时")
	startTime := time.Now().UnixNano()
	time.Sleep(time.Millisecond * 2)
	endTime := time.Now().UnixNano()
	fmt.Println((endTime - startTime) / 1000 / 1000)

}
