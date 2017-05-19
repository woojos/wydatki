<?php
declare(strict_types=1);

namespace MWojcik\Wallet\DomainModel\Transaction;

/**
 * Interface TransactionRepository
 * @package MWojcik\Wallet\DomainModel\Transaction
 */
interface TransactionRepository
{
    /**
     * @param Transaction $transaction
     */
    public function addTransaction(Transaction $transaction): void;
}