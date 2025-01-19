# PHP Default Argument Type Juggling Bug

This repository demonstrates a subtle bug in PHP related to type juggling when using default arguments in function parameters.  The issue arises when a function parameter has a default value of `null`, but a different type is passed. PHP will implicitly convert the value, leading to possibly unintended consequences.

The `bug.php` file shows the problematic code.  The solution (`bugSolution.php`) presents a way to mitigate this issue.

## Bug Description

The core problem is that PHP's loose typing can lead to surprising behavior.  When a function expects a numeric value and it receives a string,  instead of throwing an error,  PHP attempts type coercion.  In this case, an empty string becomes 0 which could lead to incorrect computations or unexpected control flow in programs.

## Solution

The best way to avoid this is to use strict comparison (`===`) to verify the type of the parameter.  The solution file shows how to explicitly check for the null value and potentially handle other data types more robustly.