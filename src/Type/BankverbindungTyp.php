<?php

namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

/**
 * @property  LastschriftverfahrenTyp Lastschriftverfahren
 * @property  SepaMandatTyp|null SepaMandat
 * @property  string Kreditinstitut
 * @property  string Kontoinhaber
 */
class BankverbindungTyp
{
    public const MAX_LENGTH_KREDITINSTITUT = 30;
    public const MAX_LENGTH_KONTOINHABER = 30;

    /**
     * @param ?LastschriftverfahrenTyp $Lastschriftverfahren
     * @return BankverbindungTyp
     */
    public function withLastschriftverfahren(?LastschriftverfahrenTyp $Lastschriftverfahren): BankverbindungTyp
    {
        $new = clone $this;
        if ($Lastschriftverfahren !== null) {
            $new->Lastschriftverfahren = $Lastschriftverfahren;
        }

        return $new;
    }

    /**
     * @param ?SepaMandatTyp $SepaMandat
     * @return BankverbindungTyp
     */
    public function withSepaMandat(?SepaMandatTyp $SepaMandat): BankverbindungTyp
    {
        $new = clone $this;
        if ($SepaMandat !== null) {
            $new->SepaMandat = $SepaMandat;
        }

        return $new;
    }

    /**
     * @param string $Kreditinstitut
     * @return BankverbindungTyp
     */
    public function withKreditinstitut(string $Kreditinstitut): BankverbindungTyp
    {
        Assert::maxLength($Kreditinstitut, self::MAX_LENGTH_KREDITINSTITUT);
        $new = clone $this;
        $new->Kreditinstitut = $Kreditinstitut;

        return $new;
    }

    /**
     * @param string $Kontoinhaber
     * @return BankverbindungTyp
     */
    public function withKontoinhaber(string $Kontoinhaber): BankverbindungTyp
    {
        Assert::maxLength($Kontoinhaber, self::MAX_LENGTH_KONTOINHABER);
        $new = clone $this;
        $new->Kontoinhaber = $Kontoinhaber;

        return $new;
    }


}

