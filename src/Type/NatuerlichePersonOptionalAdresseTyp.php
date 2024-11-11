<?php

namespace PlusForta\RuVSoapBundle\Type;

class NatuerlichePersonOptionalAdresseTyp
{
    /**
     * @var \PlusForta\RuVSoapBundle\Type\NameNatuerlichePersonTyp
     */
    private $Name;

    /**
     * @var \PlusForta\RuVSoapBundle\Type\AdresseNatuerlichePersonTyp
     */
    private $Adresse;

    /**
     * @return \PlusForta\RuVSoapBundle\Type\NameNatuerlichePersonTyp
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \PlusForta\RuVSoapBundle\Type\NameNatuerlichePersonTyp $Name
     * @return NatuerlichePersonOptionalAdresseTyp
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

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
     * @return NatuerlichePersonOptionalAdresseTyp
     */
    public function withAdresse($Adresse)
    {
        $new = clone $this;
        $new->Adresse = $Adresse;

        return $new;
    }
}
