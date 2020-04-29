<?php

namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

class BasisAnfrageTyp
{
    public const MAX_LENGTH_BENUTZER = 50;
    public const MAX_LENGTH_PASSWORT = 50;

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
        Assert::maxLength($Benutzer, self::MAX_LENGTH_BENUTZER);
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
        Assert::maxLength($Passwort, self::MAX_LENGTH_PASSWORT);
        $new = clone $this;
        $new->Passwort = $Passwort;

        return $new;
    }


}

