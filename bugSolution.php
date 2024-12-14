The solution is to use strict comparison (`===`) instead of loose comparison (`==`). Strict comparison checks for both value and type equality.  This ensures that the comparison only evaluates to true if both the values and their types are identical.

```php
$a = '10';
$b = 10;

if ($a === $b) {
  echo "Strictly equal (correct)\n"; // This will NOT execute
}

if ($a == $b) {
  echo "Loosely equal (incorrect)\n"; // This will execute
}

//Solution:

if (is_numeric($a) && $a === $b) { //Add type checking
    echo "Values are strictly equal and numeric";
}
```

By employing strict comparison and adding type checking for numeric values, the code avoids the pitfall of unexpected type juggling and ensures accurate comparisons.