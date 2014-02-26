<?php

namespace Acme\StoreBundle\Tests\Utility;

use Acme\StoreBundle\Utility\Calculator;

/**
 * Description of CalculatorTest
 *
 * @author cyber02
 */
class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        $calc = new Calculator();
        $result = $calc->add(30, 12);
        
        $this->assertEquals(42, $result);
    }
}
