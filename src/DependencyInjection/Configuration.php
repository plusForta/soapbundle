<?php


namespace PlusForta\RuVSoapBundle\DependencyInjection;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    /**
     * Generates the configuration tree builder.
     *
     * @return TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('plusforta_ruv_soap');
        /** @psalm-suppress PossiblyUndefinedMethod */
        $treeBuilder->getRootNode()->children()
            ->scalarNode('wsdl')->defaultNull()->end()
            ->scalarNode('location')->defaultNull()->end()
            ->arrayNode('connection')->addDefaultsIfNotSet()
                ->children()
                    ->arrayNode('basicAuth')
                        ->children()
                            ->scalarNode('username')->end()
                            ->scalarNode('password')->end()
                        ->end()
                    ->end()
                    ->arrayNode('proxy')
                        ->children()
                            ->scalarNode('host')->end()
                            ->scalarNode('port')->end()
                        ->end()
                    ->end()
                    ->arrayNode('ssl')->addDefaultsIfNotSet()
                        ->children()
                            ->booleanNode('verify_peer')->defaultTrue()->end()
                            ->booleanNode('verify_peer_name')->defaultTrue()->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
            ->arrayNode('Antrag')
                ->children()
                    ->arrayNode('Kennung')
                        ->children()
                            ->scalarNode('benutzer')->end()
                            ->scalarNode('passwort')->end()
                        ->end()
                    ->end()
                    ->arrayNode('Identity')->addDefaultsIfNotSet()
                        ->children()
                            ->scalarNode('name')->defaultValue('plusforta GmbH Düsseldorf')->end()
                            ->scalarNode('userid')->end()
                        ->end()
                    ->end()
                    ->arrayNode('Agenturdaten')->addDefaultsIfNotSet()
                        ->children()
                            ->scalarNode('AgenturNummer')->defaultValue('166923')->end()
                            ->scalarNode('Mitarbeiternummer')->defaultNull()->end()
                            ->scalarNode('MitarbeiternummerZusaetzlicherMA')->defaultNull()->end()
                            ->scalarNode('StellennummerZusaetzlicherMA')->defaultNull()->end()
                        ->end()
                    ->end()
                    ->arrayNode('Vertragsdaten')->addDefaultsIfNotSet()
                        ->children()
                            ->scalarNode('Produkt')->defaultValue('Mietkaution')->end()
                            ->scalarNode('Versicherungsbedingung')->defaultValue('Miet2018')->end()
                        ->end()
                    ->end()
                    ->arrayNode('Werbewiderspruch')->addDefaultsIfNotSet()
                        ->children()
                            ->booleanNode('KeineTelefonWerbung')->defaultTrue()->end()
                            ->booleanNode('KeineEMailWerbung')->defaultTrue()->end()
                            ->booleanNode('KeineDatenweitergabe')->defaultTrue()->end()
                            ->booleanNode('KeineSchriftlicheWerbung')->defaultTrue()->end()
                        ->end()
                    ->end()
                    ->arrayNode('UebergabeDokumente')->addDefaultsIfNotSet()
                        ->children()
                            ->booleanNode('VertragsbestimmungenUebergeben')->defaultTrue()->end()
                            ->booleanNode('BuergschaftUebergeben')->defaultFalse()->end()
                            ->booleanNode('VersicherungsscheinUebergeben')->defaultFalse()->end()
                            ->booleanNode('RechnungUebergeben')->defaultFalse()->end()
                        ->end()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}