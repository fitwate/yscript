package main

import (
    "fmt"
    "reflect"
)

type Test struct {
    Name string
    Data float32
}

//嵌套

type Test2 struct {
    Cname string
    Data float32
    Test_d Test
}

func main() {
    m := Test{
        Name: "test_name",
        Data: 10,
    }
    fmt.Println(m.Name, m.Data)
    m.Name = "change name"
    fmt.Println(m.Name, m.Data)

    //
    e := Test2{
        Cname: "test_name_2",
        Data: 102,
        Test_d: Test{
                Name: "test_name_2_2",
                Data: 1022,
                },
    }
    fmt.Printf("%+v\n", e)
    fmt.Println(reflect.TypeOf(e))
}
