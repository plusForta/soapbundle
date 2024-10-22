<?php

namespace PlusForta\RuVSoapBundle\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GibVertragsdatenAnfrageTyp implements RequestInterface
{
    private BasisAnfrageTyp $Kennung;
    private ZugriffsschluesselTyp $Zugriffsschluessel;

    public function getKennung(): BasisAnfrageTyp
    {
        return $this->Kennung;
    }

    public function withKennung(BasisAnfrageTyp $Kennung): self
    {
        $new = clone $this;
        $new->Kennung = $Kennung;

        return $new;
    }

    public function getZugriffsschluessel(): ZugriffsschluesselTyp
    {
        return $this->Zugriffsschluessel;
    }

    public function withZugriffsschluessel(ZugriffsschluesselTyp $Zugriffsschluessel): self
    {
        $new = clone $this;
        $new->Zugriffsschluessel = $Zugriffsschluessel;

        return $new;
    }
}
