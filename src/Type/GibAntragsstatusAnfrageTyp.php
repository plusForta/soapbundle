<?php


namespace PlusForta\RuVSoapBundle\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GibAntragsstatusAnfrageTyp implements RequestInterface
{
    private BasisAnfrageTyp $Kennung;
    private VorgangsnummerTyp $Vorgangsnummern;

    public function withKennung(BasisAnfrageTyp $Kennung): self
    {
        $new = clone $this;
        $new->Kennung = $Kennung;

        return $new;
    }

    public function withVorgangsnummern(VorgangsnummerTyp $Vorgangsnummern): self
    {
        $new = clone $this;
        $new->Vorgangsnummern = $Vorgangsnummern;

        return $new;
    }
}