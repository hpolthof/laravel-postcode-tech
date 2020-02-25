<?php


namespace Hpolthof\LaravelPostcodeTech\Tests\Unit;


use Hpolthof\LaravelPostcodeTech\Tests\TestCase;

class PostcodeTest extends TestCase
{
    public function test_can_lookup_postcode_through_facade()
    {
        $result = \Postcode::find('1071BM', 29);

        $this->assertInstanceOf('Hpolthof\\PostcodeTech\\Postcode', $result);
        $this->assertEquals('Pieter Cornelisz. Hooftstraat', $result->street());
        $this->assertEquals('Amsterdam', $result->city());
    }

    public function test_can_lookup_postcode_through_facade_not_found()
    {
        $result = \Postcode::find('9999XX', 999);
        $this->assertNull($result);
    }
}