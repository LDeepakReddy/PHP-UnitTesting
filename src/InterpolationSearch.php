<?php

class InterpolationSearch
{

    function search($array, $element)
    {
        $lower = 0;
        $higher = count($array) - 1;

        while ($lower <= $higher && $element >= $array[$lower] && $element <= $array[$higher]) {
            if ($lower == $higher) {
                if ($array[$lower] == $element) {
                    return $lower;
                } else {
                    return -1;
                }
            }
            //formula to calculate probe position
            $probingPosition = intval($lower + (($element - $array[$lower]) * ($higher - $lower) /
                ($array[$higher] - $array[$lower])));

            if ($array[$probingPosition] == $element) {
                return $probingPosition;
            }
            // If search element is larger i.e search element is in right 
            elseif ($array[$probingPosition] < $element) {
                $lower = $probingPosition + 1;
            }
            // If search element is smaller i.e search element is in the left part 
            else {
                $higher = $probingPosition - 1;
            }
        }
        return -1;
    }

    function isSorted($array)
    {
        $sortedArray = sort($array);

        if ($sortedArray == $array) {
            return true;
        } else {
            return false;
        }
    }

    function isArrayType($array)
    {
        $typeCheck = is_array($array);
        echo $typeCheck;
        if ($typeCheck == "array") {
           
            return true;
        } else {
            return false;
        }
    }
}
