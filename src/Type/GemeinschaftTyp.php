<?php

namespace PlusForta\RuVSoapBundle\Type;

class GemeinschaftTyp
{

    /**
     * @var string
     */
    private $AnredeGemeinschaft;

    /**
     * @var mixed
     */
    private $Name;

    /**
     * @var AdresseNatuerlichePersonTyp
     */
    private $Adresse;

    /**
     * @var KontaktdatenTyp
     */
    private $Kontaktdaten;

    /**
     * @param AnredeGemeinschaftTyp $AnredeGemeinschaft
     * @return GemeinschaftTyp
     */
    public function withAnredeGemeinschaft(AnredeGemeinschaftTyp $AnredeGemeinschaft): GemeinschaftTyp
    {
        $new = clone $this;
        $new->AnredeGemeinschaft = $AnredeGemeinschaft->toString();

        return $new;
    }

    /**
     * @param NamePersonGemeinschaftTyp[] $Name
     * @return GemeinschaftTyp
     */
    public function withName($Name): GemeinschaftTyp
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @param AdresseNatuerlichePersonTyp $Adresse
     * @return GemeinschaftTyp
     */
    public function withAdresse(AdresseNatuerlichePersonTyp $Adresse): GemeinschaftTyp
    {
        $new = clone $this;
        $new->Adresse = $Adresse;

        return $new;
    }

    /**
     * @param KontaktdatenTyp $Kontaktdaten
     * @return GemeinschaftTyp
     */
    public function withKontaktdaten(KontaktdatenTyp $Kontaktdaten): GemeinschaftTyp
    {
        $new = clone $this;
        $new->Kontaktdaten = $Kontaktdaten;

        return $new;
    }


}

