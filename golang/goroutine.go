package main

import (
	"fmt"
	"runtime"
)

func loop(name string) {
	for i := 1; i <= 10; i++ {
		fmt.Println(i, " => ", name)
	}
}

func main() {
	loop("Hello normal function")

	go loop("Hello goroutine function")

	fmt.Println("Number of goroutine in program: ", runtime.NumGoroutine())
}
