<?php

namespace PlusForta\RuVSoapBundle\Type;

class DokumentenversandTyp
{
    /**
     * @var string
     */
    private $VersandBuergschaft;

    /**
     * @param VersandBuergschaftEnumTyp $VersandBuergschaft
     * @return DokumentenversandTyp
     */
    public function withVersandBuergschaft(VersandBuergschaftEnumTyp $VersandBuergschaft): DokumentenversandTyp
    {
        $new = clone $this;
        $new->VersandBuergschaft = $VersandBuergschaft->toString();

        return $new;
    }
}
