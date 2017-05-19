<?php
declare(strict_types=1);

namespace MWojcik\Wallet\DomainModel\Shop;

/**
 * Class Shop
 * @package MWojcik\Wallet\DomainModel\Shop
 */
class Shop
{
    /** @var string */
    private $name;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}