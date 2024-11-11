<?php

namespace PlusForta\RuVSoapBundle\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GibVertragsdatenAnfrageTyp implements RequestInterface
{
    /**
     * @var \PlusForta\RuVSoapBundle\Type\BasisAnfrageTyp
     */
    private $Kennung;

    /**
     * @var \PlusForta\RuVSoapBundle\Type\ZugriffsschluesselTyp
     */
    private $Zugriffsschluessel;
    
    /**
     * @return \PlusForta\RuVSoapBundle\Type\BasisAnfrageTyp
     */
    public function getKennung()
    {
        return $this->Kennung;
    }

    /**
     * @param \PlusForta\RuVSoapBundle\Type\BasisAnfrageTyp $Kennung
     * @return GibVertragsdatenAnfrageTyp
     */
    public function withKennung($Kennung): GibVertragsdatenAnfrageTyp
    {
        $new = clone $this;
        $new->Kennung = $Kennung;

        return $new;
    }

    /**
     * @return \PlusForta\RuVSoapBundle\Type\ZugriffsschluesselTyp
     */
    public function getZugriffsschluessel()
    {
        return $this->Zugriffsschluessel;
    }

    /**
     * @param \PlusForta\RuVSoapBundle\Type\ZugriffsschluesselTyp $Zugriffsschluessel
     * @return GibVertragsdatenAnfrageTyp
     */
    public function withZugriffsschluessel($Zugriffsschluessel)
    {
        $new = clone $this;
        $new->Zugriffsschluessel = $Zugriffsschluessel;

        return $new;
    }
}
