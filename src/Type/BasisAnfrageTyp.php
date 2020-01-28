<?php

namespace PlusForta\RuVSoapBundle\Type;

class BasisAnfrageTyp
{

    /**
     * @var string
     */
    private $Benutzer;

    /**
     * @var string
     */
    private $Passwort;

    /**
     * @param string $Benutzer
     * @return BasisAnfrageTyp
     */
    public function withBenutzer(string $Benutzer): BasisAnfrageTyp
    {
        $new = clone $this;
        $new->Benutzer = $Benutzer;

        return $new;
    }

    /**
     * @param string $Passwort
     * @return BasisAnfrageTyp
     */
    public function withPasswort(string $Passwort): BasisAnfrageTyp
    {
        $new = clone $this;
        $new->Passwort = $Passwort;

        return $new;
    }


}

