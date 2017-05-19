<?php
declare(strict_types=1);

namespace MWojcik\Wallet\Application;


use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class Container
{
    /**
     * @return ContainerBuilder
     */
    public static function create(): ContainerBuilder
    {
        $containerBuilder = new ContainerBuilder();
        $loader = new YamlFileLoader($containerBuilder, new FileLocator(__DIR__.'/../../configs'));
        $loader->load('services.yml');

        return $containerBuilder;
    }

}