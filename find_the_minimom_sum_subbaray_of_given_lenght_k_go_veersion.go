package main

import (
	"fmt"
	"math"
)

// FindSubarray finds the minimum sum subarray of a given size `k`
func FindSubarray(arr []int, k int) {
	// base case
	if len(arr) == 0 || len(arr) <= k {
		return
	}

	// stores the sum of elements in the current window
	windowSum := 0

	// stores the sum of minimum sum subarray found so far
	minWindow := math.MaxInt64

	// stores ending index of the minimum sum subarray found so far
	last := 0

	for i := 0; i < len(arr); i++ {
		// add the current element to the window
		windowSum += arr[i]

		// if the window size is more than or equal to `k`
		if i+1 >= k {
			// update the minimum sum window
			if minWindow > windowSum {
				minWindow = windowSum
				last = i
			}

			// remove a leftmost element from the window
			windowSum -= arr[i+1-k]
		}
	}

	fmt.Printf("The minimum sum subarray is (%d, %d)\n", last-k+1, last)
}

func main() {
	arr := []int{10, 4, 2, 5, 6, 3, 8, 1}
	k := 3

	FindSubarray(arr, k)
}
