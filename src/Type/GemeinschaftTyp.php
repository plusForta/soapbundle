<?php

namespace PlusForta\RuVSoapBundle\Type;

class GemeinschaftTyp
{
    /**
     * @var string
     */
    private $AnredeGemeinschaft;

    /**
     * @var \PlusForta\RuVSoapBundle\Type\NamePersonGemeinschaftTyp
     */
    private $NameErstePerson;

    /**
     * @var \PlusForta\RuVSoapBundle\Type\NamePersonGemeinschaftOhneNamenszusatzTyp
     */
    private $NameZweitePerson;

    /**
     * @var \PlusForta\RuVSoapBundle\Type\AdresseNatuerlichePersonTyp
     */
    private $Adresse;

    /**
     * @var \PlusForta\RuVSoapBundle\Type\KontaktdatenTyp
     */
    private $Kontaktdaten;

    /**
     * @return string
     */
    public function getAnredeGemeinschaft()
    {
        return $this->AnredeGemeinschaft;
    }

    /**
     * @param string $AnredeGemeinschaft
     * @return GemeinschaftTyp
     */
    public function withAnredeGemeinschaft($AnredeGemeinschaft)
    {
        $new = clone $this;
        $new->AnredeGemeinschaft = $AnredeGemeinschaft;

        return $new;
    }

    /**
     * @return \PlusForta\RuVSoapBundle\Type\NamePersonGemeinschaftTyp
     */
    public function getNameErstePerson()
    {
        return $this->NameErstePerson;
    }

    /**
     * @param \PlusForta\RuVSoapBundle\Type\NamePersonGemeinschaftTyp $NameErstePerson
     * @return GemeinschaftTyp
     */
    public function withNameErstePerson($NameErstePerson)
    {
        $new = clone $this;
        $new->NameErstePerson = $NameErstePerson;

        return $new;
    }

    /**
     * @return \PlusForta\RuVSoapBundle\Type\NamePersonGemeinschaftOhneNamenszusatzTyp
     */
    public function getNameZweitePerson()
    {
        return $this->NameZweitePerson;
    }

    /**
     * @param \PlusForta\RuVSoapBundle\Type\NamePersonGemeinschaftOhneNamenszusatzTyp $NameZweitePerson
     * @return GemeinschaftTyp
     */
    public function withNameZweitePerson($NameZweitePerson)
    {
        $new = clone $this;
        $new->NameZweitePerson = $NameZweitePerson;

        return $new;
    }

    /**
     * @return \PlusForta\RuVSoapBundle\Type\AdresseNatuerlichePersonTyp
     */
    public function getAdresse()
    {
        return $this->Adresse;
    }

    /**
     * @param \PlusForta\RuVSoapBundle\Type\AdresseNatuerlichePersonTyp $Adresse
     * @return GemeinschaftTyp
     */
    public function withAdresse($Adresse)
    {
        $new = clone $this;
        $new->Adresse = $Adresse;

        return $new;
    }

    /**
     * @return \PlusForta\RuVSoapBundle\Type\KontaktdatenTyp
     */
    public function getKontaktdaten()
    {
        return $this->Kontaktdaten;
    }

    /**
     * @param \PlusForta\RuVSoapBundle\Type\KontaktdatenTyp $Kontaktdaten
     * @return GemeinschaftTyp
     */
    public function withKontaktdaten($Kontaktdaten)
    {
        $new = clone $this;
        $new->Kontaktdaten = $Kontaktdaten;

        return $new;
    }
}
