function foo(array $arr) {
  foreach ($arr as $value) {
    // ... some code that uses $value ...
  }
}

// Incorrect usage
$arr = [1, 2, 3];
foo($arr); // Correct

$arr = [1, 2, 3];
foo(...$arr); //Incorrect usage, leads to error