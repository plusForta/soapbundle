<?php

namespace PlusForta\RuVSoapBundle\Type;

class AbweichBuergEmpfaengerTyp
{
    public ?NatuerlichePersonTyp $NatuerlichePerson;
    public ?JuristischePersonTyp $JuristischePerson;

    public function withNatuerlichePerson(?NatuerlichePersonTyp $NatuerlichePerson): self
    {
        $new = clone $this;
        if ($NatuerlichePerson !== null) {
            $new->NatuerlichePerson = $NatuerlichePerson;
        }

        return $new;
    }

    public function withJuristischePerson(?JuristischePersonTyp $JuristischePerson): self
    {
        $new = clone $this;
        if ($JuristischePerson !== null) {
            $new->JuristischePerson = $JuristischePerson;
        }

        return $new;
    }
}