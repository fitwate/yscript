package main

import (
	"fmt"
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

}
