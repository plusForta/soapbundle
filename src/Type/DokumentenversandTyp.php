<?php

namespace PlusForta\RuVSoapBundle\Type;

class DokumentenversandTyp
{
    private string $VersandBuergschaft;

    public function withVersandBuergschaft(VersandBuergschaftEnumTyp $VersandBuergschaft): self
    {
        $new = clone $this;
        $new->VersandBuergschaft = $VersandBuergschaft->toString();

        return $new;
    }
}
