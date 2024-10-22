<?php

namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

class AntragMietkautionTyp
{
    public const MAX_LENGTH_REFERENZNUMMER = 30;

    public ?string $Referenznummer;
    public AllgemeineAngabenTyp $AllgemeineAngaben;
    public AntragsdatenTyp $Antragsdaten;

    public function withReferenznummer(?string $Referenznummer): self
    {
        $new = clone $this;
        if ($Referenznummer !== null) {
            Assert::maxLength($Referenznummer, self::MAX_LENGTH_REFERENZNUMMER);
            $new->Referenznummer = $Referenznummer;
        }

        return $new;
    }

    public function withAllgemeineAngaben(AllgemeineAngabenTyp $AllgemeineAngaben): self
    {
        $new = clone $this;
        $new->AllgemeineAngaben = $AllgemeineAngaben;

        return $new;
    }

    public function withAntragsdaten(AntragsdatenTyp $Antragsdaten): self
    {
        $new = clone $this;
        $new->Antragsdaten = $Antragsdaten;

        return $new;
    }
}
