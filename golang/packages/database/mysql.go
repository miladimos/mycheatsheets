package main

import (
	"database/sql"

	_ "github.com/go-sql-driver/mysql"
)

type Person struct {
	Id   int
	Name string
}

func main() {
	db, err := sql.Open("mysql", "")
}
