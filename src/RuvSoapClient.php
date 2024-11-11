<?php

namespace PlusForta\RuVSoapBundle;

use Phpro\SoapClient\Caller\Caller;
use Phpro\SoapClient\Type\RequestInterface;
use PlusForta\RuVSoapBundle\Messages\Factories;
use Soap\ExtSoapEngine\AbusedClient;

class RuvSoapClient
{
    public function __construct(private Caller $caller, private AbusedClient $client)
    {
    }

    private function call(string $method, RequestInterface $request)
    {
        return ($this->caller)($method, $request);
    }

    public function getClient(): AbusedClient
    {
        return $this->client;
    }

    /**
     * @param Type\PruefeBonitaetAnfrageTyp $inDoc
     * @return Type\BasisAntwortTyp
     */
    public function pruefeBonitaetOperation(Type\PruefeBonitaetAnfrageTyp $inDoc): Type\BasisAntwortTyp
    {
        $result = $this->call('pruefeBonitaetOperation', $inDoc);
        $factory = new Factories\BasisAntwortFactory();

        return $factory->create($result);
    }

    /**
     * @param Type\StelleAntragAnfrageTyp $inDoc
     * @return Type\StelleAntragAntwortTyp
     */
    public function stelleAntragOperation(Type\StelleAntragAnfrageTyp $inDoc): Type\StelleAntragAntwortTyp
    {
        $result = $this->call('stelleAntragOperation', $inDoc);
        $factory = new Factories\StelleAntragAntwortFactory();

        return $factory->create($result);
    }


    public function gibVertragsdatenOperation(Type\GibVertragsdatenAnfrageTyp $inDoc): Type\GibVertragsdatenAntwortTyp
    {
        $result = $this->call('gibVertragsdatenOperation', $inDoc);
        $factory = new Factories\GibVertragsdatenAntwortFactory();

        return $factory->create($result);
    }


    /**
     * @param Type\GibAntragsstatusAnfrageTyp $inDoc
     * @return Type\GibAntragsstatusAntwortTyp
     */
    public function gibAntragsstatusOperation(Type\GibAntragsstatusAnfrageTyp $inDoc): Type\GibAntragsstatusAntwortTyp
    {
        $result = $this->call('gibAntragsstatusOperation', $inDoc);
        $factory = new Factories\GibAntragsstatusAntwortFactory();

        return $factory->create($result);
    }
}
