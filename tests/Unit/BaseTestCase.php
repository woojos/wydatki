<?php
declare(strict_types=1);

namespace MWojcik\Wallet\Tests\Unit;

use PHPUnit\Framework\TestCase;

class BaseTestCase extends TestCase
{

    /**
     * @param string $className
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    public function getMockWithoutConstructor(string $className): \PHPUnit_Framework_MockObject_MockObject
    {
        return $this->getMockBuilder($className)
            ->disableOriginalConstructor()
            ->getMock();
    }

}