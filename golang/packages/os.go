package main

import (
	"fmt"
	"os"
)

func main() {

	// // Create , write simple file
	// file, err := os.Create("file.txt")
	// if err != nil {
	// 	fmt.Println(err)
	// 	os.Exit(1)
	// }
	// result, err := file.WriteString("This is first line")
	// if err != nil {
	// 	fmt.Println(err)
	// 	file.Close()
	// 	os.Exit(1)
	// }
	// fmt.Println(result, " bytes written.")
	// err = file.Close()
	// if err != nil {
	// 	fmt.Println(err)
	// 	os.Exit(1)
	// }

	// strings := []string{"Go", "Dart", "PHP"}
	// for _, v := range strings {
	// 	_, err = fmt.Fprintln(file, v)
	// 	if err != nil {
	// 		fmt.Println(err)
	// 		os.Exit(1)
	// 	}
	// }

	file, err := os.Open("file.txt")
	if err != nil {
		fmt.Println(err)
		os.Exit(1)
	}
	byt := make([]byte, 2)
	for {
		num, _ := file.Read(byt)
		fmt.Printf("%d byte , Content: $s \n", num, string(byt))
	}
	// if _, err := os.Stat("file-exists2.file"); os.IsNotExist(err) {
	// 	fmt.Printf("File does not exist\n")
	// }

	// os.Rename(src, dst)
}
