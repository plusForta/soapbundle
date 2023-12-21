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

    public function withAdressdaten(AdressdatenTyp $Adressdaten): AntragsdatenTyp
    {
        $new = clone $this;
        $new->Adressdaten = $Adressdaten;

        return $new;
    }

    public function withVertragsdaten(VertragsdatenTyp $Vertragsdaten): AntragsdatenTyp
    {
        $new = clone $this;
        $new->Vertragsdaten = $Vertragsdaten;

        return $new;
    }

    public function withAntragsdatenIdentifikation(?AntragsdatenIdentifikationTyp $AntragsdatenIdentifikation): AntragsdatenTyp
    {
        $new = clone $this;
        if ($AntragsdatenIdentifikation !== null) {
            $this->AntragsdatenIdentifikation = $AntragsdatenIdentifikation;
        }

        return $new;
    }
}

