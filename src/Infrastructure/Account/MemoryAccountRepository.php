<?php
declare(strict_types=1);

namespace MWojcik\Wallet\DomainModel\Infrastructure\Account;

use MWojcik\Wallet\DomainModel\{
    Account\Account, Account\AccountRepository
};

/**
 * Class MemoryAccountRepository
 * @package MWojcik\Wallet\DomainModel\Infrastructure\Account
 */
class MemoryAccountRepository implements AccountRepository
{
    public function save(Account $account): void
    {
        // TODO: Implement save() method.
    }

}