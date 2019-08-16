package main

import (
	"fmt"
	"strconv"
	"strings"
)

func headcheck(url string) string {
	fmt.Println("\nstrings.HasPrefix learn")
	res := strings.HasPrefix(url, "http")

	if !res {
		url = fmt.Sprintf("http://%s", url)
	}

	return url
}

func tailcheck(url string) string {
	fmt.Println("\nstrings.HasSuffix learn")
	res := strings.HasSuffix(url, "/")

	if !res {
		url = fmt.Sprintf("%s/", url)
	}

	return url
}

func firstnum(url string) int {
	fmt.Println("\n首次出现a字符的位置")
	res := strings.Index(url, "a")

	return res

}

func endnum(url string) int {
	fmt.Println("\n末尾出现a字符的位置")
	res := strings.LastIndex(url, "a")

	return res
}

func atob(url string) string {
	fmt.Println("\n将字符a替换为b")
	res := strings.Replace(url, "a", "b", -1)

	return res
}

func suma(url string) int {
	fmt.Println("\n统计字符a出现的次数")
	res := strings.Count(url, "a")

	return res
}

func copycopy(url string) string {

	fmt.Println("\n重复3次输入的字符")
	res := strings.Repeat(url, 3)

	return res
}

func daxiao(url string) {
	fmt.Println("\n转换大小写")
	fmt.Println(strings.ToLower(url))
	fmt.Println(strings.ToUpper(url))
	fmt.Println(strings.ToTitle(url))
}

func delSpace(url string) {
	fmt.Println("\n删除空格练习")
	fmt.Println(strings.TrimSpace(url))
	fmt.Println(strings.Trim(url, "a"))
	fmt.Println(strings.TrimLeft(url, "a"))
	fmt.Println(strings.TrimRight(url, "a"))

	testStr := "aa bb cc dd ee ff"

	fmt.Println(strings.Fields(testStr))
	fmt.Println(strings.Split(url, "."))

	testRes := strings.Split(url, ".")
	fmt.Println(strings.Join(testRes, "."))

}

func ia() {
	testInt := 2
	testStr := "22"

	//fmt.Println(testInt + testStr)
	fmt.Println(strconv.Itoa(testInt) + testStr)
	res, _ := strconv.Atoi(testStr)
	fmt.Println(testInt + res)
}

func main() {
	var url string
	fmt.Scanf("%s", &url)
	fmt.Println("input data: ", url)

	fmt.Println(headcheck(url))

	fmt.Println(tailcheck(url))

	fmt.Println(firstnum(url))

	fmt.Println(endnum(url))

	fmt.Println(atob(url))

	fmt.Println(suma(url))

	fmt.Println(copycopy(url))

	daxiao(url)

	delSpace(url)
	ia()
}
