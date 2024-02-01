<?php

namespace PlusForta\RuVSoapBundle\Type;

class KlauselnTyp
{
    private array $Klausel;

    public function getKlausel(): array
    {
        return $this->Klausel;
    }

    public function withKlausel(array $Klausel): self
    {
        $new = clone $this;
        $new->Klausel = $Klausel;

        return $new;
    }
}

