<?php

namespace PlusForta\RuVSoapBundle\Type;

/**
 * @property NatuerlichePersonErweitertTyp NatuerlichePerson
 * @property GemeinschaftTyp Gemeinschaft
 */
class VersicherungsnehmerTyp
{

    /**
     * @param NatuerlichePersonErweitertTyp $NatuerlichePerson
     * @return VersicherungsnehmerTyp
     */
    public function withNatuerlichePerson(NatuerlichePersonErweitertTyp $NatuerlichePerson): VersicherungsnehmerTyp
    {
        $new = clone $this;
        $new->NatuerlichePerson = $NatuerlichePerson;

        return $new;
    }

    /**
     * @param GemeinschaftTyp $Gemeinschaft
     * @return VersicherungsnehmerTyp
     */
    public function withGemeinschaft(GemeinschaftTyp $Gemeinschaft): VersicherungsnehmerTyp
    {
        $new = clone $this;
        $new->Gemeinschaft = $Gemeinschaft;

        return $new;
    }


}

