<?php

namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

class AdresseNatuerlichePersonTyp
{
    public const DEUTSCHLAND = 'Deutschland';
    public const MAX_LENGTH_HAUSNUMMER_ZUSATZ = 5;
    public const MAX_LENGTH_HAUSNUMMER = 10;
    public const MAX_LENGTH_STRASSE = 30;
    public const MAX_LENGTH_ORT = 25;
    public const MAX_LENGTH_TEILORT = 30;

    public ?string $HausnummerZusatz;
    public ?string $Teilort;

    private ?string $Strasse;

    private ?string $Hausnummer;

    private ?string $Postleitzahl;

    private ?string $Ort;

    private string $Land = 'Deutschland';

    public function withStrasse(string $Strasse): AdresseNatuerlichePersonTyp
    {
        Assert::maxLength($Strasse, self::MAX_LENGTH_STRASSE);
        $new = clone $this;
        $new->Strasse = $Strasse;

        return $new;
    }

    public function withHausnummer(string $Hausnummer): AdresseNatuerlichePersonTyp
    {
        Assert::maxLength($Hausnummer, self::MAX_LENGTH_HAUSNUMMER);
        $new = clone $this;
        $new->Hausnummer = $Hausnummer;

        return $new;
    }

    public function withHausnummerZusatz(?string $HausnummerZusatz): AdresseNatuerlichePersonTyp
    {
        $new = clone $this;
        if ($HausnummerZusatz !== null) {
            Assert::maxLength($HausnummerZusatz, self::MAX_LENGTH_HAUSNUMMER_ZUSATZ);
            $new->HausnummerZusatz = $HausnummerZusatz;
        }

        return $new;
    }

    public function withPostleitzahl(string $Postleitzahl): AdresseNatuerlichePersonTyp
    {
        Assert::length($Postleitzahl, 5);

        $new = clone $this;
        $new->Postleitzahl = $Postleitzahl;

        return $new;
    }

    public function withOrt(string $Ort): AdresseNatuerlichePersonTyp
    {
        Assert::maxLength($Ort, self::MAX_LENGTH_ORT);
        $new = clone $this;
        $new->Ort = $Ort;

        return $new;
    }

    public function withTeilort(?string $Teilort): AdresseNatuerlichePersonTyp
    {
        $new = clone $this;
        if ($Teilort !== null) {
            Assert::maxLength($Teilort, self::MAX_LENGTH_TEILORT);
            $new->Teilort = $Teilort;
        }

        return $new;
    }

    public function withLand(string $Land): AdresseNatuerlichePersonTyp
    {
        Assert::oneOf($Land,
            [self::DEUTSCHLAND]
        );
        $new = clone $this;
        $new->Land = $Land;

        return $new;
    }
}

