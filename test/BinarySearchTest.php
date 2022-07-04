<?php
require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
//include "PHPUnC:\Users\DEEPAK REDDY\Desktop\PHP\PHPUnitTesting\src\BinarySearch.phpitTesting\src\BinarySearch.php";


class BinarySearchTest extends TestCase
{
    public $binarySearchArray = array(2, 4, 6, 8, 10, 12, 14, 16, 18, 20);

    public function testGivenTypeIsArrayShouldReturnTrue()
    {
        $binarySearch = new BinarySearch();
        $result = $binarySearch->isArrayType($this->binarySearchArray);
        $this->assertEquals(true, $result);
    }

    public function testGivenTypeIsNotArrayShouldReturnFalse()
    {
        $binarySearchArray = "String";
        $binarySearch = new BinarySearch();
        $result = $binarySearch->isArrayType($binarySearchArray);
        $this->assertEquals(false, $result);
    }

    public function testGivenDataFoundShouldReturnTrue()
    {
        $binarySearch = new BinarySearch();

        $result = $binarySearch->binarySearch($this->binarySearchArray, 14);
        $this->assertEquals(6, $result);
    }

    public function testGivenDataNotFoundShouldReturnFalse()
    {
        $binarySearch = new BinarySearch();
        $result = $binarySearch->binarySearch($this->binarySearchArray, 60);
        $this->assertEquals(false, $result);
    }

    public function testGivenArrayIsSortedShouldReturnTrue()
    {
        $binarySearch = new BinarySearch();
        $binarySearchArray = array(1, 2, 3, 4, 7, 8, 9, 14, 15, 17, 18);
        $result = $binarySearch->isSorted($binarySearchArray);
        $this->assertEquals(true, $result, " Array Is sorted ");
    }
    
    public function testGivenArrayIsNotSortedShoulReturnFalse()
    {
        $binarySearch = new BinarySearch();
        $binarySearchArray = array(7, 8, 4, 5, 3, 9, 14, 1, 17, 2, 18, 6);
        $result = $binarySearch->isSorted($binarySearchArray);
        $this->assertEquals(false, $result, "Array is not sorted");
    }
}
