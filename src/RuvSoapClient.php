<?php

namespace PlusForta\RuVSoapBundle;

use Phpro\SoapClient\Type\ResultInterface;
use PlusForta\RuVSoapBundle\Type\PruefeBonitaetAnfrageTyp;
use PlusForta\RuVSoapBundle\Type\BasisAntwortTyp;
use PlusForta\RuVSoapBundle\Messages\Factories\BasisAntwortFactory;
use PlusForta\RuVSoapBundle\Type\StelleAntragAnfrageTyp;
use PlusForta\RuVSoapBundle\Type\StelleAntragAntwortTyp;
use PlusForta\RuVSoapBundle\Messages\Factories\StelleAntragAntwortFactory;
use PlusForta\RuVSoapBundle\Type\GibVertragsdatenAnfrageTyp;
use PlusForta\RuVSoapBundle\Type\GibVertragsdatenAntwortTyp;
use PlusForta\RuVSoapBundle\Messages\Factories\GibVertragsdatenAntwortFactory;
use PlusForta\RuVSoapBundle\Type\GibAntragsstatusAnfrageTyp;
use PlusForta\RuVSoapBundle\Type\GibAntragsstatusAntwortTyp;
use PlusForta\RuVSoapBundle\Messages\Factories\GibAntragsstatusAntwortFactory;
use Phpro\SoapClient\Caller\Caller;
use Phpro\SoapClient\Type\RequestInterface;
use Soap\ExtSoapEngine\AbusedClient;

class RuvSoapClient
{
    public function __construct(private readonly Caller $caller, private readonly AbusedClient $client)
    {
    }

    private function call(string $method, RequestInterface $request): ResultInterface
    {
        return ($this->caller)($method, $request);
    }

    public function getClient(): AbusedClient
    {
        return $this->client;
    }

    public function pruefeBonitaetOperation(PruefeBonitaetAnfrageTyp $inDoc): BasisAntwortTyp
    {
        $result = $this->call('pruefeBonitaetOperation', $inDoc);
        $factory = new BasisAntwortFactory();

        return $factory->create($result);
    }

    public function stelleAntragOperation(StelleAntragAnfrageTyp $inDoc): StelleAntragAntwortTyp
    {
        $result = $this->call('stelleAntragOperation', $inDoc);
        $factory = new StelleAntragAntwortFactory();

        return $factory->create($result);
    }

    public function gibVertragsdatenOperation(GibVertragsdatenAnfrageTyp $inDoc): GibVertragsdatenAntwortTyp
    {
        $result = $this->call('gibVertragsdatenOperation', $inDoc);
        $factory = new GibVertragsdatenAntwortFactory();

        return $factory->create($result);
    }

    public function gibAntragsstatusOperation(GibAntragsstatusAnfrageTyp $inDoc): GibAntragsstatusAntwortTyp
    {
        $result = $this->call('gibAntragsstatusOperation', $inDoc);
        $factory = new GibAntragsstatusAntwortFactory();

        return $factory->create($result);
    }
}

