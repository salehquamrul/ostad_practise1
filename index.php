<?php

//No.1

function sort_strings_by_length($arr) {
    usort($arr, function($a, $b) {
      return strlen($a) - strlen($b);
    });
    return $arr;
  }

  $array1 = array("apple", "banana", "orange", "kiwi");
$array2 = array("dog", "cat", "elephant", "lion", "tiger");
$result1 = sort_strings_by_length($array1);
$result2 = sort_strings_by_length($array2);
print_r($result1); // Outputs "Array ( [0] => kiwi [1] => apple [2] => orange [3] => banana )"
print_r($result2); // Outputs "Array ( [0] => cat [1] => dog [2] => lion [3] => tiger [4] => elephant )"


//No.3

function remove_first_last($arr) {
    array_shift($arr); // Remove the first element
    array_pop($arr); // Remove the last element
    return $arr; // Return the remaining elements
  }
  
  $array1 = array(1, 2, 3, 4, 5);
  $array2 = array('apple', 'banana', 'orange', 'kiwi');
  $result1 = remove_first_last($array1);
  $result2 = remove_first_last($array2);
  print_r($result1); // Outputs "Array ( [0] => 2 [1] => 3 [2] => 4 )"
  print_r($result2); // Outputs "Array ( [0] => banana [1] => orange )"
   

//No. 5

  function find_second_largest($arr) {
    $max = $arr[0];
    $second_max = $arr[0];
    $length = count($arr);
    
    for ($i = 1; $i < $length; $i++) {
      if ($arr[$i] > $max) {
        $second_max = $max;
        $max = $arr[$i];
      } elseif ($arr[$i] > $second_max && $arr[$i] != $max) {
        $second_max = $arr[$i];
      }
    }
    
    return $second_max;
  }

  $array1 = array(1, 2, 3, 4, 5);
$array2 = array(10, 5, 20, 30, 15);
$result1 = find_second_largest($array1);
$result2 = find_second_largest($array2);
echo $result1; // Outputs "4"
echo $result2; // Outputs "20"
