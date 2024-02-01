<?php

namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

class PrivatTyp
{
    final public const MAX_LENGTH_EMAIL = 50;

    public KontaktnummerTyp $Telefon;
    public KontaktnummerTyp $Mobil;
    public KontaktnummerTyp $Fax;
    public string $EMail;

    public function withTelefon(?KontaktnummerTyp $Telefon): self
    {
        $new = clone $this;
        if ($Telefon instanceof KontaktnummerTyp) {
            $new->Telefon = $Telefon;
        }

        return $new;
    }

    public function withMobil(?KontaktnummerTyp $Mobil): self
    {
        $new = clone $this;
        if ($Mobil instanceof KontaktnummerTyp) {
            $new->Mobil = $Mobil;
        }

        return $new;
    }

    public function withFax(?KontaktnummerTyp $Fax): self
    {
        $new = clone $this;
        if ($Fax instanceof KontaktnummerTyp) {
            $new->Fax = $Fax;
        }

        return $new;
    }

    public function withEMail(?string $EMail): self
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

