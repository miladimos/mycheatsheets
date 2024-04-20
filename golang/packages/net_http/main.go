package main

import (
	"fmt"
	"net/http"
)

func main() {
	mux := http.DefaultServeMux
	mux.HandleFunc("/", func(w http.ResponseWriter, r *http.Request) {

	})

	http.ListenAndServe(":8080", nil)

	fmt.Println("Ok")
}

func handleTest(w http.ResponseWriter, r *http.Request) {
	if r.Method == "GET" {
		// w.Write()
	}

}
