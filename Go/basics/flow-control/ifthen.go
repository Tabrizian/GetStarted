package main

import (
	"fmt"
)

func main() {
	// var x float64 = 0
	var result string

	if x := -42; x < 0 {
		result = "Less than 0"
	} else if x == 0 {
		result = "Equal to zero"
	} else {
		result = "Greater than zero"
	}

	fmt.Printf("Result: %v\n", result)
}