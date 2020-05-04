<?php

namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

/**
 * @property string|null Strasse
 * @property string|null Hausnummer
 * @property string|null HausnummerZusatz
 * @property string|null Postfach
 * @property string|null Land
 */
class AdresseJuristischePersonTyp
{
    public const DEUTSCHLAND = 'Deutschland';

    public const LENGTH_POSTLEITZAHL = 5;
    public const MAX_LENGTH_ORT = 25;
    public const MAX_LENGTH_STRASSE = 30;
    public const MAX_LENGTH_HAUSNUMMER = 10;
    public const MAX_LENGTH_HAUSNUMMER_ZUSATZ = 5;
    public const MAX_LENGTH_POSTFACH = 8;

    /**
     * @var string
     */
    private $Postleitzahl;

    /**
     * @var string
     */
    private $Ort;

    /**
     * @param string $Postleitzahl
     * @return AdresseJuristischePersonTyp
     */
    public function withPostleitzahl(string $Postleitzahl): AdresseJuristischePersonTyp
    {
        Assert::length($Postleitzahl, self::LENGTH_POSTLEITZAHL);
        $new = clone $this;
        $new->Postleitzahl = $Postleitzahl;

        return $new;
    }

    /**
     * @param string $Ort
     * @return AdresseJuristischePersonTyp
     */
    public function withOrt(string $Ort): AdresseJuristischePersonTyp
    {
        Assert::maxLength($Ort, self::MAX_LENGTH_ORT);
        $new = clone $this;
        $new->Ort = $Ort;

        return $new;
    }

    /**
     * @param string $Strasse
     * @return AdresseJuristischePersonTyp
     */
    public function withStrasse(string $Strasse): AdresseJuristischePersonTyp
    {
        Assert::maxLength($Strasse, self::MAX_LENGTH_STRASSE);
        $new = clone $this;
        $new->Strasse = $Strasse;

        return $new;
    }

    /**
     * @param string $Hausnummer
     * @return AdresseJuristischePersonTyp
     */
    public function withHausnummer(string $Hausnummer): AdresseJuristischePersonTyp
    {
        Assert::maxLength($Hausnummer, self::MAX_LENGTH_HAUSNUMMER);
        $new = clone $this;
        $new->Hausnummer = $Hausnummer;

        return $new;
    }

    /**
     * @param string $HausnummerZusatz
     * @return AdresseJuristischePersonTyp
     */
    public function withHausnummerZusatz(?string $HausnummerZusatz): AdresseJuristischePersonTyp
    {
        $new = clone $this;
        if ($HausnummerZusatz !== null) {
            Assert::maxLength($HausnummerZusatz, self::MAX_LENGTH_HAUSNUMMER_ZUSATZ);
            $new->HausnummerZusatz = $HausnummerZusatz;
        }

        return $new;
    }

    /**
     * @param ?string $Postfach
     * @return AdresseJuristischePersonTyp
     */
    public function withPostfach(?string $Postfach): AdresseJuristischePersonTyp
    {
        $new = clone $this;
        if ($Postfach !== null) {
            Assert::maxLength($Postfach, self::MAX_LENGTH_POSTFACH);
            $new->Postfach = $Postfach;
        }

        return $new;
    }

    /**
     * @param string $Land
     * @return AdresseJuristischePersonTyp
     */
    public function withLand(string $Land): AdresseJuristischePersonTyp
    {
        Assert::oneOf($Land,
            [self::DEUTSCHLAND]
        );
        $new = clone $this;
        $new->Land = $Land;

        return $new;
    }


}

