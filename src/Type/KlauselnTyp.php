<?php

namespace PlusForta\RuVSoapBundle\Type;

class KlauselnTyp
{
    /**
     * @var \PlusForta\RuVSoapBundle\Type\KlauselTyp
     */
    private $Klausel;

    /**
     * @return \PlusForta\RuVSoapBundle\Type\KlauselTyp
     */
    public function getKlausel()
    {
        return $this->Klausel;
    }

    /**
     * @param \PlusForta\RuVSoapBundle\Type\KlauselTyp $Klausel
     * @return KlauselnTyp
     */
    public function withKlausel($Klausel)
    {
        $new = clone $this;
        $new->Klausel = $Klausel;

        return $new;
    }
}

