<?php

namespace Tests\Feature;

use Tests\TestCase;
use stdClass;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        // 0. 抛出异常
        $this->withoutExceptionHandling();

        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testSuccess()
    {
        $this->assertEqualsWithDelta(1.0, 1.1, 0.2);
    }

    public function testFailure()
    {
        $this->assertEquals(1.1, 1.1);
    }

    public function testFailure2()
    {
        $expected = new stdClass;
        $expected->foo = 'foo';
        $expected->bar = 'bar';

        $actual = new stdClass;
        $actual->foo = 'foo';
        $actual->bar = 'bar';

        $this->assertEquals($expected, $actual);
    }
}
