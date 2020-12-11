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


class ContainerNestedDependentStub
{
    public $inner;

    public function __construct(ContainerDependentStub $inner)
    {
        $this->inner = $inner;
    }
}
