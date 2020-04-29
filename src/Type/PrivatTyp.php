<?php

namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

/**
 * @property KontaktnummerTyp Telefon
 * @property KontaktnummerTyp Mobil
 * @property KontaktnummerTyp Fax
 * @property string EMail
 */
class PrivatTyp
{
    public const MAX_LENGTH_EMAIL = 50;

    /**
     * @param ?KontaktnummerTyp $Telefon
     * @return PrivatTyp
     */
    public function withTelefon(?KontaktnummerTyp $Telefon): PrivatTyp
    {
        $new = clone $this;
        if ($Telefon !== null) {
            $new->Telefon = $Telefon;
        }

        return $new;
    }

    /**
     * @param ?KontaktnummerTyp $Mobil
     * @return PrivatTyp
     */
    public function withMobil(?KontaktnummerTyp $Mobil): PrivatTyp
    {
        $new = clone $this;
        if ($Mobil !== null) {
            $new->Mobil = $Mobil;
        }

        return $new;
    }

    /**
     * @param ?KontaktnummerTyp $Fax
     * @return PrivatTyp
     */
    public function withFax(?KontaktnummerTyp $Fax): PrivatTyp
    {
        $new = clone $this;
        if ($Fax !== null) {
            $new->Fax = $Fax;
        }

        return $new;
    }

    /**
     * @param ?string $EMail
     * @return PrivatTyp
     */
    public function withEMail(?string $EMail): PrivatTyp
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

