<?php
declare(strict_types=1);

namespace MWojcik\Wallet\Tests\Unit\DomainModel\Transaction;

use MWojcik\Wallet\DomainModel\Account\Account;
use MWojcik\Wallet\DomainModel\Shop\Shop;
use MWojcik\Wallet\DomainModel\Transaction\Direction;
use MWojcik\Wallet\DomainModel\Transaction\Item;
use MWojcik\Wallet\DomainModel\Transaction\Transaction;
use MWojcik\Wallet\Tests\Unit\BaseTestCase;

/**
 * Class TransactionTest
 * @package MWojcik\Wallet\Tests\Unit\DomainModel\Transaction
 */
class TransactionTest extends BaseTestCase
{
    /** @var Shop */
    private $shopMock;
    /** @var Account */
    private $accountMock;

    protected function setUp()
    {
        $this->shopMock = $this->getMockWithoutConstructor(Shop::class);
        $this->accountMock = $this->getMockWithoutConstructor(Account::class);
    }

    /**
     * @test
     */
    public function shouldCalculateTotalValue()
    {
        $transaction = new Transaction(
            $this->shopMock,
            $this->accountMock,
            new Direction(Direction::INCOME),
            [
                new Item('item1', 10, 2),
                new Item('item1', 5.5, 2),
            ]
        );

        static::assertEquals(31, $transaction->getTotalValue());
    }

    /**
     * @test
     */
    public function shouldAddItem()
    {
        $transaction = new Transaction(
            $this->shopMock,
            $this->accountMock,
            new Direction(Direction::INCOME)
        );

        static::assertEquals(0, $transaction->getTotalValue());
        static::assertEquals(0, $transaction->getItemsCount());

        $transaction->addItem(new Item('item1', 10, 2));
        $transaction->addItem(new Item('item1', 5.5, 2));

        static::assertEquals(31, $transaction->getTotalValue());
        static::assertEquals(2, $transaction->getItemsCount());
    }

}