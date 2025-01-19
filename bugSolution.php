```php
<?php
function foo($a = null) {
  if ($a === null) {
    return 0;
  } elseif (is_numeric($a)) {
    return $a + 1;
  } else {
    return -1; // Or throw an exception for invalid input
  }
}

$result = foo();
echo "Result: " . $result . "\n";

$result = foo(5);
echo "Result: " . $result . "\n";

$result = foo('');
echo "Result: " . $result . "\n";
?>
```