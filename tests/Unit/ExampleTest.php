<?php

namespace Tests\Unit;

use Illuminate\Container\Container;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\TestCase;
use Tests\Models\User;
use Tests\Unit\container\ContainerDependentStub;
use Tests\Unit\container\ContainerImplementationStub;
use Tests\Unit\container\ContainerNestedDependentStub;
use Tests\Unit\container\contracts\IContainerContractStub;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testNestedDependencyResolution()
    {
        $container = new Container();
        $container->bind(IContainerContractStub::class, ContainerImplementationStub::class);
        $class = $container->make(ContainerNestedDependentStub::class);
        $this->assertInstanceOf(ContainerDependentStub::class, $class->inner);
        $this->assertInstanceOf(ContainerImplementationStub::class, $class->inner->impl);
    }

    public function testContainerCall(User $user)
    {
        $this->assertInstanceOf(User::class, $user);
//        $this->assertInstanceOf(Task::class, $task);
    }

    public function testCallWithDependencies()
    {
        $container = new Container;
        $result = $container->call(function (\StdClass $foo, $bar = []) {
            return func_get_args();
        });
        $this->assertInstanceOf('stdClass', $result[0]);
        $this->assertEquals([], $result[1]);
        $result = $container->call(function (\StdClass $foo, $bar = []) {
            return func_get_args();
        }, ['bar' => 'taylor']);
        $this->assertInstanceOf('stdClass', $result[0]);
        $this->assertEquals('taylor', $result[1]);
    }

    public function testCallWithGlobalMethodName()
    {
        $container = new Container;
        $result = $container->call('Illuminate\Tests\Container\containerTestInject');
        $this->assertInstanceOf('Illuminate\Tests\Container\ContainerConcreteStub', $result[0]);
        $this->assertEquals('taylor', $result[1]);
    }

    public function testClosureCallback()
    {
        // Arrange

        // Actual
        $actual       = call_user_func($this->getClosure(), 'stack', 'pipe');
        $actual_value = call_user_func($actual, 'request');
        // Assert
        $this->assertInstanceOf(\Closure::class, $actual);
        $this->assertSame('request/stack/pipe', $actual_value);
    }


    public function getClosure()
    {
        return function ($stack, $pipe) {
            return function ($passable) use ($stack, $pipe) {
                return $passable . '/' . $stack . '/' . $pipe;
            };
        };
    }

    public function testApp()
    {
        $this->assertInstanceOf(Auth::class, app()->getProviders(''));
    }
}
