<?php

namespace PlusForta\RuVSoapBundle\Type;

/**
 * @property AdresseNatuerlichePersonTyp Adresse
 */
class NatuerlichePersonTyp
{
    private NameNatuerlichePersonTyp $Name;
    private AdresseNatuerlichePersonTyp $Adresse;

    public function withName(NameNatuerlichePersonTyp $Name): self
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    public function withAdresse(AdresseNatuerlichePersonTyp $Adresse): self
    {
        $new = clone $this;
        $new->Adresse = $Adresse;

        return $new;
    }
}

