<?php

use PHPUnit\Framework\TestCase;

class InterPolationSearchTest extends TestCase
{

    public $interPolationSearchArray = array(2, 5, 7, 9, 11, 14, 17, 25, 44, 77, 84);


    public function testGivenTypeIsArrayShouldReturnTrue()
    {
        $interpolationSearch = new InterpolationSearch();
        $result = $interpolationSearch->isArrayType($this->interPolationSearchArray);
        $this->assertEquals(true, $result);
    }
    public function testGivenTypeIsNotArrayShouldReturnFalse()
    {
        $interPolationSearchArray = "String";
        $interpolationSearch = new InterpolationSearch();
        $result = $interpolationSearch->isArrayType($interPolationSearchArray);
        $this->assertEquals(false, $result);
    }

    public function testGivenDataFoundShouldReturnTrue()
    {
        $interpolationSearch = new InterpolationSearch();

        $result = $interpolationSearch->search($this->interPolationSearchArray, 14);
        $this->assertEquals(6, $result, "Data Found");
    }
    public function testGivenDataNotFoundShouldReturnFalse()
    {
        $interpolationSearch = new InterpolationSearch();
        $result = $interpolationSearch->search($this->interPolationSearchArray, 60);
        $this->assertEquals(-1, $result, "Data Not Found");
    }

    public function testGivenArrayIsSortedShouldReturnTrue()
    {
        $interpolationSearch = new InterpolationSearch();
        $interPolationSearchArray = array(1, 2, 3, 4, 7, 8, 9, 14, 15, 17, 18);
        $result = $interpolationSearch->isSorted($interPolationSearchArray);
        $this->assertEquals(true, $result, " Array Is sorted ");
    }
    public function testGivenArrayIsNotSortedShoulReturnFalse()
    {
        $interpolationSearch = new InterpolationSearch();
        $interPolationSearchArray = array(7, 8, 4, 5, 3, 9, 14, 1, 17, 2, 18, 6);
        $result = $interpolationSearch->isSorted($interPolationSearchArray);
        $this->assertEquals(false, $result, "Array is not sorted");
    }
}
