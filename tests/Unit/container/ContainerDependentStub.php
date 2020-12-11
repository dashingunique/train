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


use Tests\Unit\container\contracts\IContainerContractStub;

class ContainerDependentStub
{
    public $impl;

    public function __construct(IContainerContractStub $impl)
    {
        $this->impl = $impl;
    }
}
