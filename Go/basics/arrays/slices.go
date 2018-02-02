package main

import (
	"fmt"
	"sort"
)

func main() {
	var colors = []string{"Red", "Green", "Blue"}
	fmt.Println(colors)

	colors = append(colors, "Purple")
	fmt.Println(colors)

	colors = append(colors[1:len(colors)])
	fmt.Println(colors)

	colors = append(colors[:len(colors)-1])
	fmt.Println(colors)

	numbers := make([]int, 5, 5)
	numbers[0] = 1
	numbers[1] = 7
	numbers[2] = 368
	numbers[3] = 12
	numbers[4] = 156
	fmt.Println(colors)

	numbers = append(numbers, 235)
	fmt.Println(colors)
	fmt.Println(cap(numbers))
	sort.Ints(numbers)
	fmt.Println(numbers)
}
