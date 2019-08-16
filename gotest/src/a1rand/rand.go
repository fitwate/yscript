package main

import (
	"fmt"
	"math"
	"math/rand"
	"time"
)

func init() {
	//rand.Seed(time.Now().Unix())
	rand.Seed(time.Now().UnixNano())
}

func main() {
	for i := 1; i <= 5; i++ {
		a := rand.Int()
		fmt.Println(a)
	}
	for i := 1; i <= 5; i++ {
		a := rand.Intn(100)
		fmt.Println(a)
	}
	for i := 1; i <= 5; i++ {
		a := rand.Float32()
		fmt.Println(a)
	}

	//类型最大值输出
	fmt.Println("\n int16类型最大值输出")
	fmt.Println(math.MinInt16)
	fmt.Println(math.MaxInt16)

}
