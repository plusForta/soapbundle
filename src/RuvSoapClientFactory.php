<?php

namespace PlusForta\RuVSoapBundle;

use Psr\Log\LoggerInterface;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class RuvSoapClientFactory
{

    private array $config;

    private EventDispatcherInterface $eventDispatcher;

    private LoggerInterface $logger;

    private string $wsdl;

    public function __construct(
        EventDispatcherInterface $eventDispatcher,
        LoggerInterface $logger,
        array $config,
        string $wsdl
    )
    {
        $this->eventDispatcher = $eventDispatcher;
        $this->logger = $logger;
        $this->config = $config;
        $this->wsdl = $wsdl;
    }

    public function factory() : RuvSoapClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($this->wsdl, $this->getDefaults())
                ->withClassMap(RuvSoapClientClassmap::getCollection())
        );

        return new RuvSoapClient($engine, $this->eventDispatcher);
    }

    private function getDefaults(): array
    {
        $defaults = [
            'cache_wsdl' => 1
        ];

        if (isset($this->config['location'])) {
            $defaults['location'] = $this->config['location'];
        }

        if (isset($this->config['proxy'])) {
            $defaults['proxy_host'] = $this->config['proxy']['host'];
            $defaults['proxy_port'] = $this->config['proxy']['port'];
        }

        $defaults['stream_context'] = stream_context_create(
            [
                'ssl' => $this->config['ssl']
            ]
        );
        $this->logger->debug('ExtSoapOptions::defaults', $defaults);
        return $defaults;
    }
}

