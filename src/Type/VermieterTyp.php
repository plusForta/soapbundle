<?php

namespace PlusForta\RuVSoapBundle\Type;

/**
 * @property NatuerlichePersonTyp NatuerlichePerson
 * @property JuristischePersonTyp JuristischePerson
 */
class VermieterTyp
{

    /**
     * @param NatuerlichePersonTyp $NatuerlichePerson
     * @return VermieterTyp
     */
    public function withNatuerlichePerson(NatuerlichePersonTyp $NatuerlichePerson): VermieterTyp
    {
        $new = clone $this;
        $new->NatuerlichePerson = $NatuerlichePerson;

        return $new;
    }

    /**
     * @param JuristischePersonTyp $JuristischePerson
     * @return VermieterTyp
     */
    public function withJuristischePerson(JuristischePersonTyp $JuristischePerson): VermieterTyp
    {
        $new = clone $this;
        $new->JuristischePerson = $JuristischePerson;

        return $new;
    }


}

