<?php

namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

class GeschaeftlichTyp
{
    public const MAX_LENGTH_EMAIL = 50;

    private ?KontaktnummerTyp $Telefon = null;
    private ?KontaktnummerTyp $Mobil = null;
    private ?KontaktnummerTyp $Fax = null;
    private ?string $EMail = null;

    public function withTelefon(?KontaktnummerTyp $Telefon): self
    {
        $new = clone $this;
        if ($Telefon !== null) {
            $new->Telefon = $Telefon;
        }

        return $new;
    }

    public function withMobil(?KontaktnummerTyp $Mobil): self
    {
        $new = clone $this;
        if ($Mobil !== null) {
            $new->Mobil = $Mobil;
        }

        return $new;
    }

    public function withFax(?KontaktnummerTyp $Fax): self
    {
        $new = clone $this;
        if ($Fax !== null) {
            $new->Fax = $Fax;
        }

        return $new;
    }

    public function withEmail(?string $EMail): self
    {
        $new = clone $this;
        if ($EMail !== null) {
            Assert::maxLength($EMail, self::MAX_LENGTH_EMAIL);
            Assert::email($EMail);
            $new->EMail = $EMail;
        }

        return $new;
    }
}
