function findSubarray(arr, k) {
    // base case
    if (arr.length === 0 || arr.length <= k) {
        return;
    }

    // stores the sum of elements in the current window
    let windowSum = 0;

    // stores the sum of minimum sum subarray found so far
    let minWindow = Number.MAX_SAFE_INTEGER;

    // stores ending index of the minimum sum subarray found so far
    let last = 0;

    for (let i = 0; i < arr.length; i++) {
        // add the current element to the window
        windowSum += arr[i];

        // if the window size is more than or equal to `k`
        if (i + 1 >= k) {
            // update the minimum sum window
            if (minWindow > windowSum) {
                minWindow = windowSum;
                last = i;
            }

            // remove a leftmost element from the window
            windowSum -= arr[i + 1 - k];
        }
    }

    console.log(`The minimum sum subarray is [${last - k + 1}, ${last}]`);
}

const arr = [10, 4, 2, 5, 6, 3, 8, 1];
const k = 3;

findSubarray(arr, k);
