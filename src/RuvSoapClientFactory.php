<?php

namespace PlusForta\RuVSoapBundle;

use Phpro\SoapClient\Caller\EngineCaller;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerAwareTrait;
use Psr\Log\LoggerInterface;
use Soap\Engine\SimpleEngine;
use Soap\ExtSoapEngine\ExtSoapDriver;
use Soap\ExtSoapEngine\ExtSoapEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Soap\ExtSoapEngine\Transport\ExtSoapClientTransport;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class RuvSoapClientFactory
{
    public function __construct(
        private EventDispatcherInterface $eventDispatcher,
        private LoggerInterface $logger,
        private array $config,
        private string $wsdl
    )
    {
    }

    public function factory() : RuvSoapClient
    {
        $options = ExtSoapOptions::defaults($this->wsdl, $this->getDefaults())
            ->withClassMap(RuvSoapClientClassmap::getCollection()
        );

        $driver = ExtSoapDriver::createFromOptions($options);
        $handler = new ExtSoapClientTransport($driver->getClient());
        $engine = new SimpleEngine($driver, $handler);

        $caller = new EventDispatchingCaller(new EngineCaller($engine), $this->eventDispatcher);
        return new RuvSoapClient($caller, $driver->getClient());
    }

    /**
     * @return array
     */
    private function getDefaults(): array
    {
        $defaults = [
            'cache_wsdl' => 1
        ];

        // support optional location override
        if (isset($this->config['location'])) {
            $defaults['location'] = $this->config['location'];
        }

        // support basicauth for the request to the API interface
        if (isset($this->config['basicAuth'])) {
            $defaults['login'] = $this->config['basicAuth']['username'];
            $defaults['password'] = $this->config['basicAuth']['password'];
        }

        if (isset($this->config['proxy'])) {
            $defaults['proxy_host'] = $this->config['proxy']['host'];
            $defaults['proxy_port'] = $this->config['proxy']['port'];
            // support optional username/password for connection to proxy
            if (isset($this->config['proxy']['username']) && isset($this->config['proxy']['password'])) {
                $defaults['proxy_login'] = $this->config['proxy']['username'];
                $defaults['proxy_password'] = $this->config['proxy']['password'];
            }
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

