<?php
declare(strict_types=1);

namespace MWojcik\Wallet\DomainModel\Transaction;

use MWojcik\Wallet\DomainModel\Account\Account;
use MWojcik\Wallet\DomainModel\Shop\Shop;

/**
 * Class Transaction
 * @package MWojcik\Wallet\DomainModel\Transaction
 */
class Transaction
{
    /** @var Shop */
    private $shop;
    /** @var Account */
    private $account;
    /** @var Direction */
    private $direction;
    /** @var [Item] */
    private $items;

    /**
     * @param Shop $shop
     * @param Account $account
     * @param Direction $direction
     * @param [Item] $items
     */
    public function __construct(Shop $shop, Account $account, Direction $direction, array $items = [])
    {
        $this->shop = $shop;
        $this->account = $account;
        $this->direction = $direction;
        $this->items = $items;
    }

    /**
     * @param Item $item
     */
    public function addItem(Item $item)
    {
        $this->items[] = $item;
    }

    /**
     * @return float
     */
    public function getTotalValue(): float
    {
        $count = 0;
        /** @var Item $item */
        foreach ($this->items as $item) {
            $count += $item->getTotalValue();
        }

        return $count;
    }

    /**
     * @return int
     */
    public function getItemsCount(): int
    {
        return count($this->items);
    }
}