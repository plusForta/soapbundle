<?php

namespace PlusForta\RuVSoapBundle\Type;

class JuristischePersonTyp
{
    private NameJuristischePersonTyp $NameJuristischePerson;
    private ?AdresseJuristischePersonTyp $AdresseJuristischePerson = null;

    public function withNameJuristischePerson(NameJuristischePersonTyp $NameJuristischePerson): self
    {
        $new = clone $this;
        $new->NameJuristischePerson = $NameJuristischePerson;

        return $new;
    }

    public function withAdresseJuristischePerson(?AdresseJuristischePersonTyp $AdresseJuristischePerson): self
    {
        $new = clone $this;
        if ($AdresseJuristischePerson !== null) {
            $new->AdresseJuristischePerson = $AdresseJuristischePerson;
        }

        return $new;
    }
}