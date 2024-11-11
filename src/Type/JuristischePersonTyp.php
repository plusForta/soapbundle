<?php

namespace PlusForta\RuVSoapBundle\Type;

/**
 * @property AdresseJuristischePersonTyp|null AdresseJuristischePerson
 */
class JuristischePersonTyp
{
    /**
     * @var NameJuristischePersonTyp
     */
    private $NameJuristischePerson;

    /**
     * @param mixed $NameJuristischePerson
     * @return JuristischePersonTyp
     */
    public function withNameJuristischePerson(NameJuristischePersonTyp $NameJuristischePerson): JuristischePersonTyp
    {
        $new = clone $this;
        $new->NameJuristischePerson = $NameJuristischePerson;

        return $new;
    }

    /**
     * @param mixed $AdresseJuristischePerson
     * @return JuristischePersonTyp
     */
    public function withAdresseJuristischePerson(?AdresseJuristischePersonTyp $AdresseJuristischePerson): JuristischePersonTyp
    {
        $new = clone $this;
        if ($AdresseJuristischePerson !== null) {
            $new->AdresseJuristischePerson = $AdresseJuristischePerson;
        }

        return $new;
    }
}
