<?php

require 'vendor/autoload.php';
use PHPUnit\Framework\TestCase;

class SumTest extends TestCase{
    public function testGivenSumShouldReturnTrue(){
        $sum = new Sum();
       $result=  $sum->addition(5,7);
       $this->assertEquals(12,$result);


    }
}



?>