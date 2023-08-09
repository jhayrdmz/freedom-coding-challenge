# Freedom Coding Challenge Solution

### First Challenge

Write a function that would return the Nth largest element from start or the end (default from the end) in an array, and then provide a set of test cases against that function.

_Note: That is the Nth largest element in the sorted order, not the Nth distinct element._

For Example: Given `[3, 2, 1, 5, 6, 4]`, `n = 2`, `from = end`, `return 5`.

For `$test = [3, 2, 1, 5, 6, 4]`
- `getLargestElement($test, 2)` returns 5 
- `getLargestElement($test, 3, 'start')` returns 3
- `getLargestElement($test, 1)` returns 6
- `getLargestElement($test, 0)` returns false
- `getLargestElement($test, 7)` returns false
- `getLargestElement($test, -1)` returns false

### Second Challenge

Write a function that would: arrange an array of positive integers to form the largest number or the smallest number. (default largest)

_Note: Return a string instead of an integer in case the result is too large._

For example, given [2, 20, 24, 6, 8], type = largest, the largest formed number is 8624220.

For `$test = [2, 20, 24, 6, 8]`
- `formNumber($test)` returns 8624220
- `formNumber($test, 'smallest')` returns 2022468
