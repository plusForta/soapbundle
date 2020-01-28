<?php

namespace PlusForta\RuVSoapBundle\Type;

/**
 * @property AdresseNatuerlichePersonTyp Adresse
 */
class NatuerlichePersonTyp
{

    /**
     * @var NameNatuerlichePersonTyp
     */
    private $Name;

    /**
     * @param NameNatuerlichePersonTyp $Name
     * @return NatuerlichePersonTyp
     */
    public function withName(NameNatuerlichePersonTyp $Name): NatuerlichePersonTyp
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @param AdresseNatuerlichePersonTyp $Adresse
     */
    public function withAdresse(AdresseNatuerlichePersonTyp $Adresse): NatuerlichePersonTyp
    {
        $new = clone $this;
        $new->Adresse = $Adresse;

        return $new;
    }


}

