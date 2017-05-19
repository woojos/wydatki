<?php
declare(strict_types=1);

namespace MWojcik\Wallet\Core;

interface CommandHandler
{
    /**
     * @param Command $command
     */
    public function execute(Command $command) : void;
}