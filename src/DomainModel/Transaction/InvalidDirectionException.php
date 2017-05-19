<?php
declare(strict_types=1);

namespace MWojcik\Wallet\DomainModel\Transaction;

/**
 * Class InvalidDirectionException
 * @package MWojcik\Wallet\DomainModel\Transaction
 */
class InvalidDirectionException extends TransactionException
{
    /**
     * @param string $value
     * @return InvalidDirectionException
     */
    public static function constructWithValue(string $value): InvalidDirectionException
    {
        return new self('Invalid value ' . $value . 'for transaction direction.', self::INVALID_DIRECTION);
    }
}