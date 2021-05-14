package main

import (
	"bufio"
	"fmt"
	"net"
)

func main() {

	fmt.Println("Start Socket Service Listener on port : 5000")

	listener, _ := net.Listen("tcp", ":5000")

	conn, _ := listener.Accept()

	for {
		message, _ := bufio.NewReader(conn).ReadString('\n')
		fmt.Print("Message Received:", string(message))
	}

}
