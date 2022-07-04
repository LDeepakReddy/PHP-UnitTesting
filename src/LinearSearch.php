<?php

class LinearSearch
{

    function linearSearch($array, $value)
    {
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i] == $value)
                return $i;
        }
        return false;
    }

    function count($array)
    {
        $count = sizeof($array);
        echo $count;
    }

    function isArrayType($linearSerchArray)
    {
        $typeCheck = is_array($linearSerchArray);

        if ($typeCheck == "array") {

            return true;
        } else {
            return false;
        }
    }

    function isSorted($linearSearchArray)
    {
        $sortedArray = sort($linearSearchArray);

        if ($sortedArray == $linearSearchArray) {
            return true;
        } else {
            return false;
        }
    }
}
