<?php

namespace PlusForta\RuVSoapBundle;


use PlusForta\RuVSoapBundle\DependencyInjection\Compiler\RuVSoapBundleCompilerPass;
use PlusForta\RuVSoapBundle\DependencyInjection\PlusFortaRuVSoapExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class PlusFortaRuVSoapBundle extends Bundle
{
    /**
     * Overridden to allow for the custom extension alias.
     */
    public function getContainerExtension(): ?ExtensionInterface
    {
        if (null === $this->extension) {
            $this->extension = new PlusFortaRuVSoapExtension();
        }
        return $this->extension;
    }

    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new RuVSoapBundleCompilerPass());
    }
}