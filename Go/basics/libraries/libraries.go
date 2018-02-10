package main

import (
	"fmt"
	"stringutil"
)

func main() {
	n1, l1 := stringutil.FullName("Iman", "Tabrizian")
	fmt.Printf("Fullname: %v, number of chars: %v\n", n1, l1)

	n2, l2 := stringutil.FullNameNakedReturn("Iman", "Tabrizian")
	fmt.Printf("Fullname: %v, number of chars: %v\n", n2, l2)

}
