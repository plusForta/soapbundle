<?php

namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

class BankverbindungTyp
{
    public const MAX_LENGTH_KREDITINSTITUT = 30;
    public const MAX_LENGTH_KONTOINHABER = 30;

    public LastschriftverfahrenTyp $Lastschriftverfahren;
    public ?SepaMandatTyp $SepaMandat;
    public string $Kreditinstitut;
    public string $Kontoinhaber;
    /**
     * @param ?LastschriftverfahrenTyp $Lastschriftverfahren
     * @return BankverbindungTyp
     */
    public function withLastschriftverfahren(?LastschriftverfahrenTyp $Lastschriftverfahren): self
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
    public function withSepaMandat(?SepaMandatTyp $SepaMandat): self
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
    public function withKreditinstitut(string $Kreditinstitut): self
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
    public function withKontoinhaber(string $Kontoinhaber): self
    {
        Assert::maxLength($Kontoinhaber, self::MAX_LENGTH_KONTOINHABER);
        $new = clone $this;
        $new->Kontoinhaber = $Kontoinhaber;

        return $new;
    }
}