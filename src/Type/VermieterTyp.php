<?php

namespace PlusForta\RuVSoapBundle\Type;

class VermieterTyp
{
    private NatuerlichePersonTyp $NatuerlichePerson;
    private JuristischePersonTyp $JuristischePerson;

    public function withNatuerlichePerson(NatuerlichePersonTyp $NatuerlichePerson): self
    {
        $new = clone $this;
        $new->NatuerlichePerson = $NatuerlichePerson;

        return $new;
    }

    public function withJuristischePerson(JuristischePersonTyp $JuristischePerson): self
    {
        $new = clone $this;
        $new->JuristischePerson = $JuristischePerson;

        return $new;
    }
}

