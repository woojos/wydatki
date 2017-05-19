<?php
declare(strict_types=1);

namespace MWojcik\Wallet\DomainModel\Transaction;

/**
 * Class ItemException
 * @package MWojcik\Wallet\DomainModel\Transaction
 */
class ItemException extends TransactionException
{
    /**
     * @param string $paramName
     * @param string $paramValue
     * @return ItemException
     */
    public static function constructWithInvalidParam(string $paramName, string $paramValue): ItemException
    {
        return new self('Invalid param ' . $paramName . ' with value: ' . $paramValue, static::INVALID_ITEM_PARAM);
    }
}