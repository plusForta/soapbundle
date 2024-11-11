<?php

namespace PlusForta\RuVSoapBundle\Type;

use Phpro\SoapClient\Type\RequestInterface;

class StelleAntragAnfrageTyp implements RequestInterface
{
    /**
     * @var BasisAnfrageTyp
     */
    private $Kennung;

    /**
     * @var bool
     */
    private $BonitaetspruefungDurchfuehren;

    /**
     * @var AntragMietkautionTyp
     */
    private $AntragMietkaution;

    /**
     * @param BasisAnfrageTyp $Kennung
     * @return StelleAntragAnfrageTyp
     */
    public function withKennung(BasisAnfrageTyp $Kennung): StelleAntragAnfrageTyp
    {
        $new = clone $this;
        $new->Kennung = $Kennung;

        return $new;
    }

    /**
     * @param bool $BonitaetspruefungDurchfuehren
     * @return StelleAntragAnfrageTyp
     */
    public function withBonitaetspruefungDurchfuehren(bool $BonitaetspruefungDurchfuehren): StelleAntragAnfrageTyp
    {
        $new = clone $this;
        $new->BonitaetspruefungDurchfuehren = $BonitaetspruefungDurchfuehren;

        return $new;
    }

    /**
     * @param AntragMietkautionTyp $AntragMietkaution
     * @return StelleAntragAnfrageTyp
     */
    public function withAntragMietkaution(AntragMietkautionTyp $AntragMietkaution): StelleAntragAnfrageTyp
    {
        $new = clone $this;
        $new->AntragMietkaution = $AntragMietkaution;

        return $new;
    }
}
