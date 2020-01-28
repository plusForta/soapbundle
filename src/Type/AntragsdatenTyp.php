<?php

namespace PlusForta\RuVSoapBundle\Type;

/**
 * @property AntragsdatenIdentifikationTyp|null AntragsdatenIdentifikation
 */
class AntragsdatenTyp
{

    /**
     * @var AdressdatenTyp
     */
    private $Adressdaten;

    /**
     * @var VertragsdatenTyp
     */
    private $Vertragsdaten;

    /**
     * @param AdressdatenTyp $Adressdaten
     * @return AntragsdatenTyp
     */
    public function withAdressdaten(AdressdatenTyp $Adressdaten): AntragsdatenTyp
    {
        $new = clone $this;
        $new->Adressdaten = $Adressdaten;

        return $new;
    }

    /**
     * @param VertragsdatenTyp $Vertragsdaten
     * @return AntragsdatenTyp
     */
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

