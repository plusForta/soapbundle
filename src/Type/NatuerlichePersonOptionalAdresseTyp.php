<?php

namespace PlusForta\RuVSoapBundle\Type;

class NatuerlichePersonOptionalAdresseTyp
{
    private NameNatuerlichePersonTyp $Name;
    private AdresseNatuerlichePersonTyp $Adresse;

    public function getName(): NameNatuerlichePersonTyp
    {
        return $this->Name;
    }

    public function withName(NameNatuerlichePersonTyp $Name): self
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    public function getAdresse(): AdresseNatuerlichePersonTyp
    {
        return $this->Adresse;
    }

    public function withAdresse(AdresseNatuerlichePersonTyp $Adresse): self
    {
        $new = clone $this;
        $new->Adresse = $Adresse;

        return $new;
    }
}
