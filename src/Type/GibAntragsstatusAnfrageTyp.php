<?php


namespace PlusForta\RuVSoapBundle\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GibAntragsstatusAnfrageTyp implements RequestInterface
{

    /**
     * @var BasisAnfrageTyp
     */
    private $Kennung;

    /**
     * @var VorgangsnummerTyp
     */
    private $Vorgangsnummern;

    /**
     * @param BasisAnfrageTyp $Kennung
     */
    public function withKennung(BasisAnfrageTyp $Kennung): GibAntragsstatusAnfrageTyp
    {
        $new = clone $this;
        $new->Kennung = $Kennung;

        return $new;
    }


    /**
     * @param VorgangsnummerTyp $Vorgangsnummer
     */
    public function withVorgangsnummern(VorgangsnummerTyp $Vorgangsnummern): GibAntragsstatusAnfrageTyp
    {
        $new = clone $this;
        $new->Vorgangsnummern = $Vorgangsnummern;

        return $new;
    }


}