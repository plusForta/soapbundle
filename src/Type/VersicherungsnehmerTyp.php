<?php

namespace PlusForta\RuVSoapBundle\Type;

class VersicherungsnehmerTyp
{
    /**
     * @var \PlusForta\RuVSoapBundle\Type\NameTyp
     */
    private $Name;

    /**
     * @var string
     */
    private $Strasse;

    /**
     * @var string
     */
    private $Postleitzahl;

    /**
     * @var string
     */
    private $Ort;

    /**
     * @var \PlusForta\RuVSoapBundle\Type\NatuerlichePersonErweitertTyp
     */
    private $NatuerlichePerson;

    /**
     * @var \PlusForta\RuVSoapBundle\Type\GemeinschaftTyp
     */
    private $Gemeinschaft;

    /**
     * @return \PlusForta\RuVSoapBundle\Type\NameTyp
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \PlusForta\RuVSoapBundle\Type\NameTyp $Name
     * @return VersicherungsnehmerTyp
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return string
     */
    public function getStrasse()
    {
        return $this->Strasse;
    }

    /**
     * @param string $Strasse
     * @return VersicherungsnehmerTyp
     */
    public function withStrasse($Strasse)
    {
        $new = clone $this;
        $new->Strasse = $Strasse;

        return $new;
    }

    /**
     * @return string
     */
    public function getPostleitzahl()
    {
        return $this->Postleitzahl;
    }

    /**
     * @param string $Postleitzahl
     * @return VersicherungsnehmerTyp
     */
    public function withPostleitzahl($Postleitzahl)
    {
        $new = clone $this;
        $new->Postleitzahl = $Postleitzahl;

        return $new;
    }

    /**
     * @return string
     */
    public function getOrt()
    {
        return $this->Ort;
    }

    /**
     * @param string $Ort
     * @return VersicherungsnehmerTyp
     */
    public function withOrt($Ort)
    {
        $new = clone $this;
        $new->Ort = $Ort;

        return $new;
    }

    /**
     * @return \PlusForta\RuVSoapBundle\Type\NatuerlichePersonErweitertTyp
     */
    public function getNatuerlichePerson()
    {
        return $this->NatuerlichePerson;
    }

    /**
     * @param \PlusForta\RuVSoapBundle\Type\NatuerlichePersonErweitertTyp $NatuerlichePerson
     * @return VersicherungsnehmerTyp
     */
    public function withNatuerlichePerson($NatuerlichePerson)
    {
        $new = clone $this;
        $new->NatuerlichePerson = $NatuerlichePerson;

        return $new;
    }

    /**
     * @return \PlusForta\RuVSoapBundle\Type\GemeinschaftTyp
     */
    public function getGemeinschaft()
    {
        return $this->Gemeinschaft;
    }

    /**
     * @param \PlusForta\RuVSoapBundle\Type\GemeinschaftTyp $Gemeinschaft
     * @return VersicherungsnehmerTyp
     */
    public function withGemeinschaft($Gemeinschaft)
    {
        $new = clone $this;
        $new->Gemeinschaft = $Gemeinschaft;

        return $new;
    }
}
