<?php

namespace PlusForta\RuVSoapBundle\Type;

class JuristischePersonOptionalAdresseTyp
{
    /**
     * @var \PlusForta\RuVSoapBundle\Type\NameJuristischePersonTyp
     */
    private $NameJuristischePerson;

    /**
     * @var \PlusForta\RuVSoapBundle\Type\AdresseJuristischePersonTyp
     */
    private $AdresseJuristischePerson;

    /**
     * @return \PlusForta\RuVSoapBundle\Type\NameJuristischePersonTyp
     */
    public function getNameJuristischePerson()
    {
        return $this->NameJuristischePerson;
    }

    /**
     * @param \PlusForta\RuVSoapBundle\Type\NameJuristischePersonTyp $NameJuristischePerson
     * @return JuristischePersonOptionalAdresseTyp
     */
    public function withNameJuristischePerson($NameJuristischePerson)
    {
        $new = clone $this;
        $new->NameJuristischePerson = $NameJuristischePerson;

        return $new;
    }

    /**
     * @return \PlusForta\RuVSoapBundle\Type\AdresseJuristischePersonTyp
     */
    public function getAdresseJuristischePerson()
    {
        return $this->AdresseJuristischePerson;
    }

    /**
     * @param \PlusForta\RuVSoapBundle\Type\AdresseJuristischePersonTyp $AdresseJuristischePerson
     * @return JuristischePersonOptionalAdresseTyp
     */
    public function withAdresseJuristischePerson($AdresseJuristischePerson)
    {
        $new = clone $this;
        $new->AdresseJuristischePerson = $AdresseJuristischePerson;

        return $new;
    }
}

