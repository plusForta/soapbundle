<?php

namespace PlusForta\RuVSoapBundle\Type;

class ZugriffsschluesselTyp
{
    private string $Vorgangsnummer;

    private RechtsgeschaeftTyp $Rechtsgeschaeft;

    public function getVorgangsnummer(): string
    {
        return $this->Vorgangsnummer;
    }

    public function withVorgangsnummer(string $Vorgangsnummer): self
    {
        $new = clone $this;
        $new->Vorgangsnummer = $Vorgangsnummer;

        return $new;
    }

    public function getRechtsgeschaeft(): RechtsgeschaeftTyp
    {
        return $this->Rechtsgeschaeft;
    }

    public function withRechtsgeschaeft(RechtsgeschaeftTyp $Rechtsgeschaeft): self
    {
        $new = clone $this;
        $new->Rechtsgeschaeft = $Rechtsgeschaeft;

        return $new;
    }
}

