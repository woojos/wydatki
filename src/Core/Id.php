<?php
declare(strict_types=1);

namespace MWojcik\Wallet\Core;

class Id
{
    private const NULL_VALUE = 0;

    /** @var int */
    private $id;

    /**
     * @param int $id
     */
    public function __construct(int $id)
    {
        if ($id < 0) {
            throw new \InvalidArgumentException($id . ' is not allowed for Id');
        }

        $this->id = $id;
    }

    /**
     * @return Id
     */
    public static function createNullInstance(): Id
    {
        return new self(self::NULL_VALUE);
    }

    /**
     * @param int $id
     * @return Id
     */
    public static function createFromInt(int $id): Id
    {
        return new self($id);
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

}