<?php




class BinarySearch
{

    function binarySearch($array, $key)
    {
        $low = 0;
        $high = count($array) - 1;

        while ($low <= $high) {
            //compute middle index
            $mid = floor(($low + $high) / 2);

            //element found at mid
            if ($array[$mid] == $key) {
                return $mid;
            }
            if ($key < $array[$mid]) {
                //search the left side of the array
                $high = $mid - 1;
            } else {
                //search the right side of the array
                $low = $mid + 1;
            }
        }
        return false;
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

    function isSorted($array)
    {
        $sortedArray = sort($array);

        if ($sortedArray == $array) {
            return true;
        } else {
            return false;
        }
    }
}
