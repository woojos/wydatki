<?php
declare(strict_types=1);

namespace MWojcik\Wallet\DomainModel\Transaction;

/**
 * Class Direction
 * @package MWojcik\Wallet\DomainModel\Transaction
 */
class Direction
{
    const INCOME = 'income';
    const OUTCOME = 'outcome';

    /** @var string */
    protected $value;

    /**
     * @param string $value
     * @throws InvalidDirectionException
     */
    public function __construct(string $value)
    {
        if ($this->validate($value)) {
            $this->value = $value;
        } else {
            throw InvalidDirectionException::constructWithValue($value);
        }
    }

    /**
     * @return array
     */
    public function getAllValues(): array
    {
        return [static::INCOME, static::OUTCOME];
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return bool
     */
    private function validate(string $value): bool
    {
        return in_array($value, $this->getAllValues());
    }
}