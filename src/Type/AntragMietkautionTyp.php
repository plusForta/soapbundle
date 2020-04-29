<?php

namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

/**
 * @property string|null Referenznummer
 * @property AllgemeineAngabenTyp AllgemeineAngaben
 * @property AntragsdatenTyp Antragsdaten
 */
class AntragMietkautionTyp
{

    /**
     * @param ?string $Referenznummer
     * @return AntragMietkautionTyp
     */
    public function withReferenznummer(?string $Referenznummer): AntragMietkautionTyp
    {
        $new = clone $this;
        if ($Referenznummer !== null) {
            Assert::maxLength($Referenznummer, 30);
            $new->Referenznummer = $Referenznummer;
        }

        return $new;
    }

    /**
     * @param AllgemeineAngabenTyp $AllgemeineAngaben
     * @return AntragMietkautionTyp
     */
    public function withAllgemeineAngaben(AllgemeineAngabenTyp $AllgemeineAngaben): AntragMietkautionTyp
    {
        $new = clone $this;
        $new->AllgemeineAngaben = $AllgemeineAngaben;

        return $new;
    }

    /**
     * @param AntragsdatenTyp $Antragsdaten
     * @return AntragMietkautionTyp
     */
    public function withAntragsdaten(AntragsdatenTyp $Antragsdaten): AntragMietkautionTyp
    {
        $new = clone $this;
        $new->Antragsdaten = $Antragsdaten;

        return $new;
    }


}

