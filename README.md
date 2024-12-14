# PHP Loose Comparison Bug

This repository demonstrates a common, yet subtle, error in PHP: the unexpected behavior of loose comparison (`==`) when comparing strings and integers.

The `bug.php` file contains code that illustrates the problem. The `bugSolution.php` file provides a corrected version using strict comparison (`===`).

**Key takeaway:** Always use strict comparison (`===`) in PHP to avoid unexpected type juggling issues.