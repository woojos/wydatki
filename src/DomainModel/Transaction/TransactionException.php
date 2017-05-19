<?php
declare(strict_types=1);

namespace MWojcik\Wallet\DomainModel\Transaction;

/**
 * Class TransactionException
 * @package MWojcik\Wallet\DomainModel\Transaction
 */
class TransactionException extends \Exception
{
    const INVALID_DIRECTION = 100;
    const INVALID_ITEM_PARAM = 200;
}