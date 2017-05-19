<?php

use MWojcik\Wallet\Application\Account\AddAccountCommand;
use MWojcik\Wallet\Application\Container;
use MWojcik\Wallet\Core\CommandDispatcher;

require_once 'vendor/autoload.php';

$container = Container::create();

/** @var CommandDispatcher $accountCommandDispatcher */
$accountCommandDispatcher = $container->get('account.command_dispatcher');

$accountCommandDispatcher->execute(new AddAccountCommand('blablabla'));


