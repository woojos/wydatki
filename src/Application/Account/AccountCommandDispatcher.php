<?php
declare(strict_types=1);

namespace MWojcik\Wallet\Application\Account;

use MWojcik\Wallet\Core\Command;
use MWojcik\Wallet\Core\CommandDispatcher;

/**
 * Class AccountCommandDispatcher
 * @package MWojcik\Wallet\Application\Account
 */
class AccountCommandDispatcher implements CommandDispatcher
{
    /** @var array */
    private $di = [];

    public function __construct()
    {

    }

    public function execute(Command $command): void
    {
        echo "dupa";
        // TODO: Implement execute() method.
    }


}