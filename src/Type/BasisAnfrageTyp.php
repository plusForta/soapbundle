<?php

namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

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
        Assert::maxLength($Benutzer, 50);
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
        Assert::maxLength($Passwort, 50);
        $new = clone $this;
        $new->Passwort = $Passwort;

        return $new;
    }


}

