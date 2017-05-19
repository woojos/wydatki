<?php
declare(strict_types=1);

namespace MWojcik\Wallet\Application\Account;

use MWojcik\Wallet\Core\Command;
use MWojcik\Wallet\Core\CommandHandler;
use MWojcik\Wallet\Core\Id;
use MWojcik\Wallet\DomainModel\Account\Account;
use MWojcik\Wallet\DomainModel\Account\AccountRepository;

/**
 * Class AddAccountCommandHandler
 * @package MWojcik\Wallet\Application\Account
 */
class AddAccountCommandHandler implements CommandHandler
{
    /** @var AccountRepository */
    private $accountRepository;

    /**
     * @param AccountRepository $accountRepository
     */
    public function __construct(AccountRepository $accountRepository)
    {
        $this->accountRepository = $accountRepository;
    }

    /**
     * @param Command $command
     */
    public function execute(Command $command): void
    {
        $addAccountCommand = $this->castCommand($command);

        $this->accountRepository->save(
            new Account(Id::createNullInstance(), $addAccountCommand->getName())
        );
    }

    /**
     * @param Command $command
     * @return AddAccountCommand
     */
    private function castCommand(Command $command)
    {
        /** @var AddAccountCommand $addAccountCommand */
        $addAccountCommand = $command;
        return $addAccountCommand;
    }

}