<?php


namespace PlusForta\RuVSoapBundle\DependencyInjection\Compiler;


use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class RuVSoapBundleCompilerPass implements CompilerPassInterface
{

    /**
     * You can modify the container here before it is dumped to PHP code.
     */
    public function process(ContainerBuilder $container)
    {
        if ($container->has('logger')) {
            $container->setAlias('ruv_soap.logger', 'logger');

        }
    }

}