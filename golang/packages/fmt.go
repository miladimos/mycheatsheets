package main

import "fmt"

func main() {
	fmt.Print("Hello")
	fmt.Println("World")

	var input int
	i, err := fmt.Scanln(&input)
	if err == nil {
		fmt.Println(err)
	}

}
