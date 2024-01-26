<?php

namespace PlusForta\RuVSoapBundle\Type;

class JuristischePersonOptionalAdresseTyp
{
    private NameJuristischePersonTyp $NameJuristischePerson;
    private AdresseJuristischePersonTyp $AdresseJuristischePerson;

    public function getNameJuristischePerson(): NameJuristischePersonTyp
    {
        return $this->NameJuristischePerson;
    }

    public function withNameJuristischePerson(NameJuristischePersonTyp $NameJuristischePerson): self
    {
        $new = clone $this;
        $new->NameJuristischePerson = $NameJuristischePerson;

        return $new;
    }

    public function getAdresseJuristischePerson(): AdresseJuristischePersonTyp
    {
        return $this->AdresseJuristischePerson;
    }

    public function withAdresseJuristischePerson(AdresseJuristischePersonTyp $AdresseJuristischePerson): self
    {
        $new = clone $this;
        $new->AdresseJuristischePerson = $AdresseJuristischePerson;

        return $new;
    }
}

