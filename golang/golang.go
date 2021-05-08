package main

import (
	"fmt"
	"time"
)

func main() {
	// fmt.Print("Hello")
	// fmt.Println(" World!")

	// fmt.Printf("%d %s %f", 14, "String", 3.14)
	// fmt.Printf("10 type -> %T", 10) // int

	time.Sleep(1 * time.Second)

	// string, float32, bool, int32
	// var a, a1 string
	// var b = "string"

	// c := 10

	// var (
	// 	var1      = "value1"
	// 	var2 bool = true
	// )

	// const constName = "value"
	// const PI float32 = 3.14

	// const (
	// 	VERSION = "1"
	// )

	// language := "Js"
	// language2 := "Vuejs"
	// if language == "PHP" {
	// 	fmt.Println("PHP is cool")
	// } else if language == "Go" {
	// 	fmt.Println("Go is fun")
	// } else {
	// 	fmt.Println("Else ")
	// }

	// if n := 10; n <= 0 {
	// 	fmt.Print("True")
	// }

	// switch language {
	// case "PHP":
	// 	fmt.Print("PHP")
	// case "C":
	// 	fmt.Print("C")
	// default:
	// 	fmt.Print("D")
	// }

	// switch {
	// case language == "Js":
	// 	switch {
	// 	case language2 == "Vuejs":
	// 		fmt.Print("Ok")
	// 	}
	// }

	i := 1
	for i <= 3 {
		fmt.Println(i)
		i = i + 1
	}

	for j := 7; j <= 9; j++ {
		fmt.Println(j)
	}

	for {
		fmt.Println("loop")
		break
	}

	for n := 0; n <= 5; n++ {
		if n%2 == 0 {
			continue
		}
		fmt.Println(n)
	}
}
