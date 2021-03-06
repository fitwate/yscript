package main

import (
	"bufio"
	"fmt"
	"os"
)

func process(str string) (wc, sc, nc, oc int) {
	t := []rune(str)
	for _, v := range t {
		switch {
		case v >= 'a' && v <= 'z':
			wc++
		case v >= 'A' && v <= 'Z':
			wc++
		case v == ' ':
			sc++
		case int(v) >= '0' && int(v) <= '9':
			nc++
		default:
			oc++
		}
	}
	return

}

func main() {
	reader := bufio.NewReader(os.Stdin)
	res, _, err := reader.ReadLine()
	if err != nil {
		fmt.Println("read from console err ", err)
		return
	}

	fmt.Println(process(string(res)))
}
