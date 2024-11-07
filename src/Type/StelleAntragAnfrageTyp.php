<?php

namespace PlusForta\RuVSoapBundle\Type;

use Phpro\SoapClient\Type\RequestInterface;

class StelleAntragAnfrageTyp implements RequestInterface
{
    private BasisAnfrageTyp $Kennung;
    private bool $BonitaetspruefungDurchfuehren;
    private AntragMietkautionTyp $AntragMietkaution;

    public function withKennung(BasisAnfrageTyp $Kennung): self
    {
        $new = clone $this;
        $new->Kennung = $Kennung;

        return $new;
    }

    public function withBonitaetspruefungDurchfuehren(bool $BonitaetspruefungDurchfuehren): self
    {
        $new = clone $this;
        $new->BonitaetspruefungDurchfuehren = $BonitaetspruefungDurchfuehren;

        return $new;
    }

    public function withAntragMietkaution(AntragMietkautionTyp $AntragMietkaution): self
    {
        $new = clone $this;
        $new->AntragMietkaution = $AntragMietkaution;

        return $new;
    }
}
