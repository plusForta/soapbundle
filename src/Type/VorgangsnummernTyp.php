<?php

namespace PlusForta\RuVSoapBundle\Type;

class VorgangsnummernTyp
{
    private string $Vorgangsnummer;

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
}

