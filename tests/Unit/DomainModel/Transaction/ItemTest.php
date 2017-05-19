<?php
declare(strict_types=1);

namespace MWojcik\Wallet\Tests\Unit\DomainModel\Transaction;

use MWojcik\Wallet\DomainModel\Transaction\Item;
use MWojcik\Wallet\DomainModel\Transaction\ItemException;
use MWojcik\Wallet\Tests\Unit\BaseTestCase;

/**
 * Class ItemTest
 * @package MWojcik\Wallet\Tests\Unit\DomainModel\Transaction
 */
class ItemTest extends BaseTestCase
{

    /**
     * @test
     * @dataProvider getInvalidConstructorParams
     */
    public function shouldThrowExceptionWhenInvalidParams(float $unitValue, int $amount)
    {
        $this->expectException(ItemException::class);
        $this->expectExceptionCode(ItemException::INVALID_ITEM_PARAM);
        new Item('name', $unitValue, $amount);
    }

    /**
     * @test
     */
    public function shouldCountTotalValue()
    {
        $item = new Item('name', 10, 2);
        static::assertEquals(20, $item->getTotalValue());
    }

    /**
     * @return array
     */
    public function getInvalidConstructorParams(): array
    {
        return [
            [0, 1],
            [0, 0],
            [1, 0]
        ];
    }
}