package main

import "fmt"

func main() {
	// var a [5]int
	// a[2] = 20
	// fmt.Println(len(a))

	// var b [3]string
	// b = [3]string{"One", "Two", "three"}
	// fmt.Println(b)

	// c := [2]int{1, 2}

	// for i := 0; i < len(a); i++ {
	// 	fmt.Println(a[i])
	// }

	// languages := [3]string{
	// 	"PHP",
	// 	"Go",
	// 	"C",
	// }

	//////////// Slice

	// s := make([]int, 3)

	// s2 := []string{"One", "Two", "three"}
	// s2 = append(s2, "C")

	// copy(empty, s2)

	////////// Maps

	var languages = make(map[string]string)
	languages["Fa"] = "Farsi"
	languages["En"] = "English"
	languages["Fr"] = "French"
	// fmt.Println(languages)

	user := map[string]string{
		"Name": "Ali",
		"Age":  "23",
	}

	// delete(user, "Age")

	if v, ok := user["Email"]; ok {
		fmt.Println(v)
	} else {
		fmt.Println("Key not found")
	}

	for key, value := range languages {
		fmt.Printf("Key: %s : Value: %s \r\n", key, value)
	}

	// emptyMap := map[int][string]{}

}
