package main

import (
    "fmt"
)

func main() {

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
    qiepian = append(qiepian, "test3value","test4value","test5value")

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
    copy(newqiepian,qiepian)
    fmt.Println(newqiepian)
    newqiepian[0] = "newqiepian_value"
    fmt.Println(qiepian)
    fmt.Println(newqiepian)

    for i,n := range newqiepian {
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
    for k,v := range map_test {
        fmt.Println("key is ", k)
        fmt.Println("value is ", v)

    }
}
