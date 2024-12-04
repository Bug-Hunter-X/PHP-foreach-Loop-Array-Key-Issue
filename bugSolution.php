The solution involves avoiding assumptions about array key consecutiveness.  Instead of incrementing the key, use `array_keys()` to get an ordered list of keys or iterate directly through the array values without key reliance. 

Here's a corrected version:
```php
<?php
$myArray = array(
    0 => 'apple',
    2 => 'banana',
    4 => 'cherry'
);

// Method 1: Using array_keys()
$keys = array_keys($myArray);
foreach ($keys as $index => $key) {
    echo "Key: " . $key . ", Value: " . $myArray[$key] . "\n";
    if (isset($keys[$index + 1])) {
        echo "Next key: " . $keys[$index + 1] . "\n";
    }
}

//Method 2: Iterating through values directly 
foreach($myArray as $value){    
echo "Value: " . $value . "\n";
}
?>
```
This corrected code directly references the keys obtained through `array_keys()` to ensure accuracy, handling potential gaps or irregularities in the original array's numeric keys.  The second method demonstrates how to iterate without relying on the keys at all.