package main

import (
	"fmt"
	"math/big"
	"math"
)

func main() {
	i1, i2, i3 := 12, 45, 68
	intSum := i1 + i2 + i3

	fmt.Println("Integer Sum:", intSum)

	f1, f2, f3 := 23.5, 65.1, 36.3
	floatSum := f1 + f2 + f3
	fmt.Println("Float sum:", floatSum)

	var b1, b2, b3, bigSum big.Float

	b1.SetFloat64(23.5)
	b2.SetFloat64(65.1)
	b3.SetFloat64(36.3)

	bigSum.Add(&b1, &b2).Add(&bigSum, &b3)
	fmt.Printf("BigSum = %.10g\n", &bigSum)

	circleRadius := 15.5
	circumference := circleRadius * math.Pi
	fmt.Printf("circumference %.2f", circumference)

}