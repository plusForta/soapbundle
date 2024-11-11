<?php

namespace PlusForta\RuVSoapBundle\Type;

/**
 * @property NatuerlichePersonTyp|null NatuerlichePerson
 * @property JuristischePersonTyp|null JuristischePerson
 */
class AbweichBuergEmpfaengerTyp
{
    /**
     * @param ?NatuerlichePersonTyp $NatuerlichePerson
     * @return AbweichBuergEmpfaengerTyp
     */
    public function withNatuerlichePerson(?NatuerlichePersonTyp $NatuerlichePerson): AbweichBuergEmpfaengerTyp
    {
        $new = clone $this;
        if ($NatuerlichePerson !== null) {
            $new->NatuerlichePerson = $NatuerlichePerson;
        }

        return $new;
    }

    /**
     * @param ?JuristischePersonTyp $JuristischePerson
     * @return AbweichBuergEmpfaengerTyp
     */
    public function withJuristischePerson(?JuristischePersonTyp $JuristischePerson): AbweichBuergEmpfaengerTyp
    {
        $new = clone $this;
        if ($JuristischePerson !== null) {
            $new->JuristischePerson = $JuristischePerson;
        }

        return $new;
    }
}
