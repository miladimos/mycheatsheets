package main

import (
	"fmt"
	"time"
)

func main() {
	go fmt.Println("World")
	fmt.Println("Hello")
	time.Sleep(3 * time.Second)
}
