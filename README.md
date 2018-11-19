# php-permutations
PHP generate permutations

## Requirements
* PHP >= 5.4

## License
* MIT

## How to use
```php
permutations($list, $length) : array

/**
 * param
 *   $list   : dataset
 *   $length : length
 * return
 *   array(array())
 */
```

## Examples
```php:test.php
<?php
$result = permutations([1,2,3], 2);
print_r($result);
```

```bash:result
Array
(
    [0] => Array
        (
            [0] => 1
            [1] => 2
        )

    [1] => Array
        (
            [0] => 1
            [1] => 3
        )

    [2] => Array
        (
            [0] => 2
            [1] => 1
        )

    [3] => Array
        (
            [0] => 2
            [1] => 3
        )

    [4] => Array
        (
            [0] => 3
            [1] => 1
        )

    [5] => Array
        (
            [0] => 3
            [1] => 2
        )

)
```


