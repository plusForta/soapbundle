<?php

namespace PlusForta\RuVSoapBundle\Type;

class UebergabeDokumenteTyp
{

    private bool $VertragsbestimmungenUebergeben = true;
    private bool $BuergschaftUebergeben = true;
    private bool $VersicherungsscheinUebergeben = true;
    private bool $RechnungUebergeben = true;

    public function withVertragsbestimmungenUebergeben($VertragsbestimmungenUebergeben): UebergabeDokumenteTyp
    {
        $new = clone $this;
        $new->VertragsbestimmungenUebergeben = $VertragsbestimmungenUebergeben;

        return $new;
    }

    public function withBuergschaftUebergeben(bool $BuergschaftUebergeben): self
    {
        $new = clone $this;
        $new->BuergschaftUebergeben = $BuergschaftUebergeben;

        return $new;
    }

    public function withVersicherungsscheinUebergeben(bool $VersicherungsscheinUebergeben): self
    {
        $new = clone $this;
        $new->VersicherungsscheinUebergeben = $VersicherungsscheinUebergeben;

        return $new;
    }

    public function withRechnungUebergeben(bool $RechnungUebergeben): self
    {
        $new = clone $this;
        $new->RechnungUebergeben = $RechnungUebergeben;

        return $new;
    }
}

