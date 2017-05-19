<?php
declare(strict_types=1);

namespace MWojcik\Wallet\Application\Account;

use MWojcik\Wallet\Core\Command;

/**
 * Class AddAccountCommand
 * @package MWojcik\Wallet\Application\Account
 */
class AddAccountCommand implements Command
{
    /** @var string */
    private $name;

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