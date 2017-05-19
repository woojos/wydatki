<?php
declare(strict_types=1);

namespace MWojcik\Wallet\Core;

/**
 * Interface CommandDispatcher
 * @package MWojcik\Wallet\Core
 */
interface CommandDispatcher
{
    /**
     * @param Command $command
     */
    public function execute(Command $command) : void;
}