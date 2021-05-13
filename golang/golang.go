package main

import (
	"fmt"
	"time"
)

type Post struct {
	Title, Body string
	Active      bool
	Author
}

type Author struct {
	Email, Name string
}

// const APP string = "App" // Exported
// const app string = "App" // Un exported

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

	// i := 1
	// for i <= 3 {
	// 	fmt.Println(i)
	// 	i = i + 1
	// }

	// for j := 7; j <= 9; j++ {
	// 	fmt.Println(j)
	// }

	// for {
	// 	fmt.Println("loop")
	// 	break
	// }

	// for n := 0; n <= 5; n++ {
	// 	if n%2 == 0 {
	// 		continue
	// 	}
	// 	fmt.Println(n)
	// }

	///// Struct

	// p := Post{}
	// p := new(Post)
	// p := Post{"Title New", "This is Good", true}
	// p := Post{Title: "Title New", Body: "This is Good", Active: true, Author: Author{"email", "name"}}
	// p.Title = "Test"
	// fmt.Println(p.Author.Email)

	// p.new()

	/////// Pointers

	// var x = 10
	// var y *int = &x // x address
	// fmt.Println(y)  // 0xc000086000
	// fmt.Println(*y) // 10

	// v := 10
	// changeValue(&v)
	// fmt.Println(v)
}

func (p Post) new() {
	fmt.Println("new")
}

func changeValue(value *int) {
	*value = 1000
}

func hello(name string) {
	fmt.Println("Hello " + name)
}

func hello2(name string, family string) string {
	return fmt.Sprintf("Hello Dear, %s %s", name, family)
}

func add(x, y int) int {
	return x + y
}
