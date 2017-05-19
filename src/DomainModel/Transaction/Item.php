<?php
declare(strict_types=1);

namespace MWojcik\Wallet\DomainModel\Transaction;

/**
 * Class Item
 * @package MWojcik\Wallet\DomainModel\Transaction
 */
class Item
{

    /** @var string */
    private $name;
    /** @var float */
    private $unitValue;
    /** @var int */
    private $amount;

    /**
     * @param string $name
     * @param float $unitValue
     * @param int $amount
     * @throws ItemException
     */
    public function __construct(string $name, float $unitValue, int $amount = 1)
    {
        if ($unitValue <= 0) {
            throw ItemException::constructWithInvalidParam('unitValue', (string)$unitValue);
        }

        if ($amount <= 0) {
            throw ItemException::constructWithInvalidParam('amount', (string)$amount);
        }

        $this->name = $name;
        $this->unitValue = $unitValue;
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getUnitValue(): float
    {
        return $this->unitValue;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @return float
     */
    public function getTotalValue(): float
    {
        return $this->amount * $this->unitValue;
    }

}