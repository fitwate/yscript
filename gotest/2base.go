package main

import (
	"fmt"
	"reflect"
)

func main() {
	//int
	var v1 int64
	v1 = 122
	v2 := 111
	fmt.Println("整数")
	fmt.Println(v1, v2)
	fmt.Println(reflect.TypeOf(v2))

	//float
	var fv1 float32
	fv1 = 122
	fv2 := 111.0
	fmt.Println("浮动")
	fmt.Println(fv1, fv2)
	fmt.Println(reflect.TypeOf(fv2))

	//byte
	var ch_v byte
	ch_v = 'a'
	fmt.Println("字符")
	fmt.Println(ch_v)
	fmt.Printf("char = %c \n", ch_v)

	//string
	var str string
	str = "test_str"
	fmt.Println("字符串")
	fmt.Println(str)
	str2 := `test_str_2 start
             \n \r
             test_str_2 end
    `
	fmt.Println(str2)

	//数组
	fmt.Println("数组")
	var test [2]string
	test[0] = "test0value"
	test[1] = "test1value"

	fmt.Println(test[0])
	fmt.Println(test[1])
	fmt.Println(test)

	// 切片
	fmt.Println("切片")
	var qiepian = make([]string, 2)
	qiepian[0] = "test0value"
	qiepian[1] = "test1value"

	qiepian = append(qiepian, "test2value")
	qiepian = append(qiepian, "test3value", "test4value", "test5value")

	fmt.Println(qiepian[0])
	fmt.Println(qiepian[1])
	fmt.Println(qiepian[:2])
	fmt.Println(qiepian[2:])
	fmt.Println(len(qiepian))
	fmt.Println(qiepian)

	//删除切片
	qiepian = append(qiepian[:2], qiepian[2+1:]...)
	fmt.Println(len(qiepian))
	fmt.Println(qiepian)

	//复制切片
	fmt.Println("复制切片")
	var newqiepian = make([]string, 5)
	//var newqiepian = make([]string, 2)
	copy(newqiepian, qiepian)
	fmt.Println(newqiepian)
	newqiepian[0] = "newqiepian_value"
	fmt.Println(qiepian)
	fmt.Println(newqiepian)

	for i, n := range newqiepian {
		if i == 3 {
			fmt.Println("index 3 is ", i)
			fmt.Println("value 3 is ", n)
		} else {
			fmt.Println("index is ", i)
			fmt.Println("value is ", n)
		}
	}

	// 映射
	fmt.Println("map 映射")
	var map_test = make(map[string]int)
	map_test["test1"] = 111
	map_test["test2"] = 222
	map_test["test3"] = 333
	fmt.Println(map_test)

	delete(map_test, "test3")
	map_test["test2"] = 20202
	fmt.Println(map_test)

	fmt.Println("for map")
	for k, v := range map_test {
		fmt.Println("key is ", k)
		fmt.Println("value is ", v)

	}

	//指针
	var a int
	a = 10
	var b *int
	b = &a
	fmt.Println("\n指针练习")
	fmt.Printf("指针值 %x \n", &a)
	fmt.Println(*b)
	*b = 20
	fmt.Println(a)
	fmt.Println(*b)
}
