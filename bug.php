```php
<?php
function foo($a = null) {
  if ($a === null) {
    return 0;
  } else {
    return $a + 1;
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