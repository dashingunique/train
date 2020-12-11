<?php
/**
 * @author    张大宝的程序人生 <1107842285@qq.com>
 * ==========================================================================
 * @Desc
 * ==========================================================================
 * @link    https://github.com/dashingunique
 * ==========================================================================
 */

namespace Tests\Unit\container;


class ContainerDefaultValueStub
{
    public $stub;
    public $default;

    public function __construct(ContainerConcreteStub $stub, $default = 'taylor')
    {
        $this->stub = $stub;
        $this->default = $default;
    }
}
