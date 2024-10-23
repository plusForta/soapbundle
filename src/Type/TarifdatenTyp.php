<?php

namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

class TarifdatenTyp
{
    private string $Versicherungsbedingungen;
    private float $Buergschaftssumme;
    private float $Jahresbeitrag;

    public function withVersicherungsbedingungen(VersicherungsbedingungenEnumTyp $Versicherungsbedingungen): self
    {
        $new = clone $this;
        $new->Versicherungsbedingungen = $Versicherungsbedingungen->toString();

        return $new;
    }

    public function withBuergschaftssumme(float $Buergschaftssumme): self
    {
        Assert::greaterThan($Buergschaftssumme, 0.0);

        $new = clone $this;
        $new->Buergschaftssumme = round($Buergschaftssumme, 2);

        return $new;
    }

    public function withJahresbeitrag(float $Jahresbeitrag): self
    {
        Assert::greaterThan($Jahresbeitrag, 0.0);

        $new = clone $this;
        $new->Jahresbeitrag = round($Jahresbeitrag, 2);

        return $new;
    }
}

