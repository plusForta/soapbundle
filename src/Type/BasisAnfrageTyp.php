<?php

namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

class BasisAnfrageTyp
{
    public const MAX_LENGTH_BENUTZER = 50;
    public const MAX_LENGTH_PASSWORT = 50;

    private ?string $Benutzer;

    private ?string $Passwort;

    public function withBenutzer(string $Benutzer): BasisAnfrageTyp
    {
        Assert::maxLength($Benutzer, self::MAX_LENGTH_BENUTZER);
        $new = clone $this;
        $new->Benutzer = $Benutzer;

        return $new;
    }

    public function withPasswort(string $Passwort): BasisAnfrageTyp
    {
        Assert::maxLength($Passwort, self::MAX_LENGTH_PASSWORT);
        $new = clone $this;
        $new->Passwort = $Passwort;

        return $new;
    }
}

