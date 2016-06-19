<?php

require_once '../calculator.php';

class calculatorTest extends PHPUnit_Framework_TestCase {

    protected $calculator;
    
    protected function setUp() {
        $this->calculator = new calculator();
    }
    
    protected function tearDown() {
        $this->calculator = NULL;
    }

    /**
     * dataProvider for testPlus
     */
    public function providerPlus() {
        return [
            [3, 1, 2],
            [9, 5, 4],
            [11, 1, 10],
        ];
    }

    /**
     * @dataProvider providerPlus
     */
    public function testPlus($expected, $data1, $data2) {
        $this->assertEquals($expected, $this->calculator->plus($data1, $data2));
    }

}
