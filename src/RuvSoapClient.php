<?php

namespace PlusForta\RuVSoapBundle;

use Phpro\SoapClient\Caller\Caller;
use Phpro\SoapClient\Type\RequestInterface;
use PlusForta\RuVSoapBundle\Messages\Factories\GibAntragsstatusAntwortFactory;
use PlusForta\RuVSoapBundle\Messages\Factories\GibVertragsdatenAntwortFactory;
use PlusForta\RuVSoapBundle\Messages\Factories\StelleAntragAntwortFactory;
use PlusForta\RuVSoapBundle\Messages\Factories\BasisAntwortFactory;
use PlusForta\RuVSoapBundle\Type;
use PlusForta\RuVSoapBundle\Type\GibAntragsstatusAnfrageTyp;
use PlusForta\RuVSoapBundle\Type\PruefeBonitaetAnfrageTyp;
use PlusForta\RuVSoapBundle\Type\StelleAntragAnfrageTyp;

class RuvSoapClient
{

    public function __construct(private Caller $caller)
    {
    }

    private function call(string $method, RequestInterface $request)
    {
        return ($this->caller)($method, $request);
    }

    /**
     * @param PruefeBonitaetAnfrageTyp $inDoc
     * @return Type\BasisAntwortTyp
     */
    public function pruefeBonitaetOperation(PruefeBonitaetAnfrageTyp $inDoc): Type\BasisAntwortTyp
    {
        $result = $this->call('pruefeBonitaetOperation', $inDoc);
        $factory = new BasisAntwortFactory();
        return $factory->create($result);
    }

    /**
     * @param StelleAntragAnfrageTyp $inDoc
     * @return Type\StelleAntragAntwortTyp
     */
    public function stelleAntragOperation(StelleAntragAnfrageTyp $inDoc): Type\StelleAntragAntwortTyp
    {
        $result = $this->call('stelleAntragOperation', $inDoc);
        $factory = new StelleAntragAntwortFactory();
        return $factory->create($result);
    }


    public function gibVertragsdatenOperation(Type\GibVertragsdatenAnfrageTyp $inDoc): Type\GibVertragsdatenAntwortTyp
    {
        $result = $this->call('gibVertragsdatenOperation', $inDoc);
        $factory = new GibVertragsdatenAntwortFactory();
        return $factory->create($result);
    }


    /**
     * @param GibAntragsstatusAnfrageTyp $inDoc
     */
    public function gibAntragsstatusOperation(GibAntragsstatusAnfrageTyp $inDoc): Type\GibAntragsstatusAntwortTyp
    {
        $result = $this->call('gibAntragsstatusOperation', $inDoc);
        $factory = new GibAntragsstatusAntwortFactory();
        return $factory->create($result);
    }


}

