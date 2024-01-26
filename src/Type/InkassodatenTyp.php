<?php

namespace PlusForta\RuVSoapBundle\Type;

class InkassodatenTyp
{
    private string $Zahlungsweise;
    private string $Inkassoart;
    private ZahlungseinzugTyp $Zahlungseinzug;

    public function withZahlungsweise(ZahlungsweiseEnumTyp $Zahlungsweise): self
    {
        $new = clone $this;
        $new->Zahlungsweise = $Zahlungsweise->toString();

        return $new;
    }

    public function withInkassoart(InkassoartEnumTyp $Inkassoart): self
    {
        $new = clone $this;
        $new->Inkassoart = $Inkassoart->toString();

        return $new;
    }

    public function withZahlungseinzug(?ZahlungseinzugTyp $Zahlungseinzug): self
    {
        $new = clone $this;
        if ($Zahlungseinzug !== null) {
            $new->Zahlungseinzug = $Zahlungseinzug;
        }

        return $new;
    }
}