package main

import (
	"bufio"
	"fmt"
	"os"
)

func checkError(err error) {
	if err != nil {
		fmt.Println(err)
		os.Exit(1)
	}
}

func main() {
	// bytes, err := ioutil.ReadFile("file.txt")
	// checkError(err)
	// fmt.Println(string(bytes))

	file, err := os.Open("file.txt")
	checkError(err)
	// reader := bufio.NewReader(file)
	// checkError(err)
	// content, err := reader.Peek(2)
	// checkError(err)
	// fmt.Println(string(content))

	scanner := bufio.NewScanner(file)
	scanner.Split(bufio.ScanWords)
	for scanner.Scan() {
		fmt.Println(scanner.Text())
	}

}
