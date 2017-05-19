<?php
declare(strict_types=1);

namespace MWojcik\Wallet\DomainModel\Account;

use MWojcik\Wallet\Core\Id;

/**
 * Class Account
 * @package MWojcik\Wallet\DomainModel\Account
 */
class Account
{
    /** @var Id */
    private $id;
    /** @var string */
    private $name;

    public function __construct(Id $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * @return Id
     */
    public function getId(): Id
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

}