<?php

namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

/**
 * @property KontaktnummerTyp|null Telefon
 * @property KontaktnummerTyp|null Mobil
 * @property KontaktnummerTyp|null Fax
 * @property string|null EMail
 */
class GeschaeftlichTyp
{
    public const MAX_LENGTH_EMAIL = 50;

    /**
     * @param ?KontaktnummerTyp $Telefon
     */
    public function withTelefon(?KontaktnummerTyp $Telefon): GeschaeftlichTyp
    {
        $new = clone $this;
        if ($Telefon !== null) {
            $new->Telefon = $Telefon;
        }

        return $new;
    }

    /**
     * @param ?KontaktnummerTyp $Mobil
     * @return GeschaeftlichTyp
     */
    public function withMobil(?KontaktnummerTyp $Mobil): GeschaeftlichTyp
    {
        $new = clone $this;
        if ($Mobil !== null) {
            $new->Mobil = $Mobil;
        }

        return $new;
    }

    /**
     * @param ?KontaktnummerTyp $Fax
     * @return GeschaeftlichTyp
     */
    public function withFax(?KontaktnummerTyp $Fax): GeschaeftlichTyp
    {
        $new = clone $this;
        if ($Fax !== null) {
            $new->Fax = $Fax;
        }

        return $new;
    }

    /**
     * @param string $EMail
     * @return GeschaeftlichTyp
     */
    public function withEMail(?string $EMail): GeschaeftlichTyp
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