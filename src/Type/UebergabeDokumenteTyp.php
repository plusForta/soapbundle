<?php

namespace PlusForta\RuVSoapBundle\Type;

class UebergabeDokumenteTyp
{
    /**
     * @var bool
     */
    private $VertragsbestimmungenUebergeben = true;

    /**
     * @var bool
     */
    private $BuergschaftUebergeben = true;

    /**
     * @var bool
     */
    private $VersicherungsscheinUebergeben = true;

    /**
     * @var bool
     */
    private $RechnungUebergeben = true;

    /**
     * @param bool $VertragsbestimmungenUebergeben
     * @return UebergabeDokumenteTyp
     */
    public function withVertragsbestimmungenUebergeben($VertragsbestimmungenUebergeben): UebergabeDokumenteTyp
    {
        $new = clone $this;
        $new->VertragsbestimmungenUebergeben = $VertragsbestimmungenUebergeben;

        return $new;
    }

    /**
     * @param bool $BuergschaftUebergeben
     * @return UebergabeDokumenteTyp
     */
    public function withBuergschaftUebergeben($BuergschaftUebergeben): UebergabeDokumenteTyp
    {
        $new = clone $this;
        $new->BuergschaftUebergeben = $BuergschaftUebergeben;

        return $new;
    }

    /**
     * @param bool $VersicherungsscheinUebergeben
     * @return UebergabeDokumenteTyp
     */
    public function withVersicherungsscheinUebergeben($VersicherungsscheinUebergeben): UebergabeDokumenteTyp
    {
        $new = clone $this;
        $new->VersicherungsscheinUebergeben = $VersicherungsscheinUebergeben;

        return $new;
    }

    /**
     * @param bool $RechnungUebergeben
     * @return UebergabeDokumenteTyp
     */
    public function withRechnungUebergeben($RechnungUebergeben): UebergabeDokumenteTyp
    {
        $new = clone $this;
        $new->RechnungUebergeben = $RechnungUebergeben;

        return $new;
    }
}
