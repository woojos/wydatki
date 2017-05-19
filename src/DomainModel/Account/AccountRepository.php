<?php
declare(strict_types=1);

namespace MWojcik\Wallet\DomainModel\Account;

/**
 * Interface AccountRepository
 * @package MWojcik\Wallet\DomainModel\Account
 */
interface AccountRepository
{
    /**
     * @param Account $account
     */
    public function save(Account $account): void;

}