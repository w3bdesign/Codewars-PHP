<?php
/*
Given an array, find the int that appears an odd number of times.

There will always be only one integer that appears an odd number of times.
*/

/**
 * findIt
 *
 * @param  mixed $arr
 * @return int
 */
function findIt(array $arr) : int
{
    
    $count = 0; 
    $arrCount = count($arr);
    for ($i = 0;  $i < $arrCount; $i++)  
    { 
          
        for ($j = 0; $j < $arrCount; $j++) 
        { 
            if ($arr[$i] == $arr[$j]) { 
                $count++;
            } 
        } 
        if ($count % 2 != 0) { 
            return $arr[$i];
        } 
    } 
    return -1; 
}

// Alternate solution:

/**
 * altfindIt
 *
 * @param  mixed $seq
 * @return mixed
 */
function altfindIt(array $seq) : mixed
{
    $nums = array_count_values($seq);
    foreach ($nums as $key => $val) {
        if ($val % 2) {
            return $key;
        }
    }
    return -1; 
}
