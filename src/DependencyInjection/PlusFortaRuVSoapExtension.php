<?php


namespace PlusForta\RuVSoapBundle\DependencyInjection;


use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;


class PlusFortaRuVSoapExtension extends Extension
{

    /**
     * Loads a specific configuration.
     *
     * @throws \InvalidArgumentException|\Exception When provided tag is not defined in this extension
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');


        $configuration = $this->getConfiguration($configs, $container);
        /** @psalm-suppress PossiblyNullArgument */
        $config = $this->processConfiguration($configuration, $configs);

        $definition = $container->getDefinition('PlusForta\RuVSoapBundle\RuvSoapClientFactory');
        $definition->setArgument(2, $this->getConnectionConfig($config));
        $definition->setArgument(3, $this->getWsdl($config));

        // KennungsFactory
        $definition = $container->getDefinition('PlusForta\RuVSoapBundle\Messages\Factories\KennungFactory');
        $definition->setArgument(0, $this->getKennungBenutzer($config));
        $definition->setArgument(1, $this->getKennungPasswort($config));

        // AgenturdatenFactory
        $definition = $container->getDefinition('PlusForta\RuVSoapBundle\Messages\Factories\AgenturdatenFactory');
        $definition->setArgument(0, $this->getAgenturNummer($config));
        $definition->setArgument(1, $this->getMitarbeiternummer($config));
        $definition->setArgument(2, $this->getMitarbeiternummerZusaetzlicherMA($config));
        $definition->setArgument(3, $this->getStellennummerZusaetzlicherMA($config));

        // VertragsdatenFactory
        $definition = $container->getDefinition('PlusForta\RuVSoapBundle\Messages\Factories\VertragsdatenFactory');
        $definition->setArgument(1, $this->getProdukt($config));
        $definition->setArgument(2, $this->getVersicherungsbedingung($config));

        // AntragMietkautionFactory
        $definition = $container->getDefinition('PlusForta\RuVSoapBundle\Messages\Factories\AntragMietkautionFactory');
        $definition->setArgument(2, $this->getKeineTelefonWerbung($config));
        $definition->setArgument(3, $this->getKeineEMailWerbung($config));
        $definition->setArgument(4, $this->getKeineDatenweitergabe($config));
        $definition->setArgument(5, $this->getKeineSchriftlicheWerbung($config));

        // UebergabeDokumenteFactory
        $definition = $container->getDefinition('PlusForta\RuVSoapBundle\Messages\Factories\UebergabeDokumenteFactory');
        $definition->setArgument(0, $this->getVertragsbestimmungenUebergeben($config));
        $definition->setArgument(1, $this->getBuergschaftUebergeben($config));
        $definition->setArgument(2, $this->getVersicherungsscheinUebergeben($config));
        $definition->setArgument(3, $this->getRechnungUebergeben($config));


    }

    public function getAlias()
    {
        return 'plusforta_ruv_soap';
    }

    private function getKennungBenutzer(array $config)
    {
        //@TODO config für Version
        return $config['Antrag']['Kennung']['benutzer'];
    }

    private function getKennungPasswort(array $config)
    {
        //@TODO config für Version
        return $config['Antrag']['Kennung']['passwort'];
    }

    private function getAgenturNummer($config)
    {
        return $config['Antrag']['Agenturdaten']['AgenturNummer'];
    }

    private function getMitarbeiternummer($config)
    {
        return $config['Antrag']['Agenturdaten']['Mitarbeiternummer'];
    }

    private function getMitarbeiternummerZusaetzlicherMA($config)
    {
        return $config['Antrag']['Agenturdaten']['MitarbeiternummerZusaetzlicherMA'];
    }

    private function getStellennummerZusaetzlicherMA($config)
    {
        return $config['Antrag']['Agenturdaten']['StellennummerZusaetzlicherMA'];
    }

    private function getProdukt(array $config)
    {
        return $config['Antrag']['Vertragsdaten']['Produkt'];
    }

    private function getVersicherungsbedingung(array $config)
    {
        return $config['Antrag']['Vertragsdaten']['Versicherungsbedingung'];
    }

    private function getKeineTelefonWerbung(array $config)
    {
        return $config['Antrag']['Werbewiderspruch']['KeineTelefonWerbung'];
    }

    private function getKeineEMailWerbung(array $config)
    {
        return $config['Antrag']['Werbewiderspruch']['KeineEMailWerbung'];
    }

    private function getKeineDatenweitergabe(array $config)
    {
        return $config['Antrag']['Werbewiderspruch']['KeineDatenweitergabe'];
    }

    private function getKeineSchriftlicheWerbung(array $config)
    {
        return $config['Antrag']['Werbewiderspruch']['KeineSchriftlicheWerbung'];
    }

    private function getVertragsbestimmungenUebergeben(array $config)
    {
        return $config['Antrag']['UebergabeDokumente']['VertragsbestimmungenUebergeben'];
    }

    private function getBuergschaftUebergeben(array $config)
    {
        return $config['Antrag']['UebergabeDokumente']['BuergschaftUebergeben'];
    }

    private function getVersicherungsscheinUebergeben(array $config)
    {
        return $config['Antrag']['UebergabeDokumente']['VersicherungsscheinUebergeben'];
    }

    private function getRechnungUebergeben(array $config)
    {
        return $config['Antrag']['UebergabeDokumente']['RechnungUebergeben'];
    }

    private function getConnectionConfig(array $config)
    {
        return $config['connection'];
    }

    private function getWsdl(array $config)
    {
        return $config['wsdl'];
    }
}