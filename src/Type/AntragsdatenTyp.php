<?php

namespace PlusForta\RuVSoapBundle\Type;

/**
 * @property |null AntragsdatenIdentifikation
 */
class AntragsdatenTyp
{
    public ?AntragsdatenIdentifikationTyp $AntragsdatenIdentifikation;
    private ?AdressdatenTyp $Adressdaten;
    private ?VertragsdatenTyp $Vertragsdaten;

    public function withAdressdaten(AdressdatenTyp $Adressdaten): self
    {
        $new = clone $this;
        $new->Adressdaten = $Adressdaten;

        return $new;
    }

    public function withVertragsdaten(VertragsdatenTyp $Vertragsdaten): self
    {
        $new = clone $this;
        $new->Vertragsdaten = $Vertragsdaten;

        return $new;
    }

    public function withAntragsdatenIdentifikation(?AntragsdatenIdentifikationTyp $AntragsdatenIdentifikation): self
    {
        $new = clone $this;
        if ($AntragsdatenIdentifikation !== null) {
            $this->AntragsdatenIdentifikation = $AntragsdatenIdentifikation;
        }

        return $new;
    }
}
