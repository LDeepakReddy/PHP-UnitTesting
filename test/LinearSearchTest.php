<?php
//require 'vendor/autoload.php';
use PHPUnit\Framework\TestCase;


class LinearSearchTest extends TestCase

{

    public $linearSearchArray = array(60, 45, 85, 97, 50, 22, 34, 20, 75, 14);

    public function testGivenDataFoundShouldReturnTrue()
    {
        $linearSearch = new LinearSearch();
        $result = $linearSearch->linearSearch($this->linearSearchArray, 97);
        $this->assertEquals(true, $result, "Data Found");
    }
    public function testGivenDataNotFoundShouldReturnFalse()
    {
        $linearSearch = new LinearSearch();
        $result = $linearSearch->linearSearch($this->linearSearchArray, 74);
        $this->assertEquals(false, $result, "Data Not Found");
    }

    

    public function testGivenTypeIsArrayShouldReturnTrue()
    {
        $linearSearch = new LinearSearch();
        $result = $linearSearch->isArrayType($this->linearSearchArray);
        $this->assertEquals(true, $result);
    }
    public function testGivenTypeIsNotArrayShouldReturnFalse()
    {
        $linearSearchArray = "String";
        $linearSearch = new LinearSearch();
        $result = $linearSearch->isArrayType($linearSearchArray);
        $this->assertEquals(false, $result);
    }
    public function testGivenArrayIsSortedShouldReturnTrue()
    {
        $linearSearch = new LinearSearch();
        $linearSearchArray = array(1, 2, 3, 4, 7, 8, 9, 14, 15, 17, 18);
        $result = $linearSearch->isSorted($linearSearchArray);
        $this->assertEquals(true, $result, " Array Is sorted ");
    }
    public function testGivenArrayIsNotSortedShoulReturnFalse()
    {
        $linearSearch = new LinearSearch();
        $linearSearchArray = array(7, 8, 4, 5, 3, 9, 14, 1, 17, 2, 18, 6);
        $result = $linearSearch->isSorted($linearSearchArray);
        $this->assertEquals(false, $result, "Array is not sorted");
    }
}
