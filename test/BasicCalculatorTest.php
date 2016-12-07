<?php

use mheap\BasicCalculator;

class BasicCalculatorTest extends PHPUnit_Framework_TestCase {

    public function testOnePlusOneEqualsTwo(){
        $c = new BasicCalculator();
        $c->add(1);
        $c->add(1);
        $this->assertEquals(2.0, $c->result());
    }

    public function testFromExpressionTenDivTwoEqualsFive(){
        $c = BasicCalculator::FromExpression("10 / 2");
        $this->assertEquals(5.0, $c->result());
    }

    public function testBodmasFails(){
        $c = BasicCalculator::FromExpression("3 + 4 * 2");
        $this->assertEquals(14.0, $c->result());
    }
}
