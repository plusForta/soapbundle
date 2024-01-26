<?php

namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

class AdresseJuristischePersonTyp
{
    public const DEUTSCHLAND = 'Deutschland';

    public const LENGTH_POSTLEITZAHL = 5;
    public const MAX_LENGTH_ORT = 25;
    public const MAX_LENGTH_STRASSE = 30;
    public const MAX_LENGTH_HAUSNUMMER = 10;
    public const MAX_LENGTH_HAUSNUMMER_ZUSATZ = 5;
    public const MAX_LENGTH_POSTFACH = 8;

    public ?string $Strasse;
    public ?string $Hausnummer;
    public ?string $HausnummerZusatz;
    public ?string $Postfach;
    public ?string $Land;

    private ?string $Postleitzahl;

    private ?string $Ort;

    public function withPostleitzahl(string $Postleitzahl): self
    {
        Assert::length($Postleitzahl, self::LENGTH_POSTLEITZAHL);
        $new = clone $this;
        $new->Postleitzahl = $Postleitzahl;

        return $new;
    }

    public function withOrt(string $Ort): self
    {
        Assert::maxLength($Ort, self::MAX_LENGTH_ORT);
        $new = clone $this;
        $new->Ort = $Ort;

        return $new;
    }

    public function withStrasse(string $Strasse): self
    {
        Assert::maxLength($Strasse, self::MAX_LENGTH_STRASSE);
        $new = clone $this;
        $new->Strasse = $Strasse;

        return $new;
    }

    public function withHausnummer(string $Hausnummer): self
    {
        Assert::maxLength($Hausnummer, self::MAX_LENGTH_HAUSNUMMER);
        $new = clone $this;
        $new->Hausnummer = $Hausnummer;

        return $new;
    }

    public function withHausnummerZusatz(?string $HausnummerZusatz): self
    {
        $new = clone $this;
        if ($HausnummerZusatz !== null) {
            Assert::maxLength($HausnummerZusatz, self::MAX_LENGTH_HAUSNUMMER_ZUSATZ);
            $new->HausnummerZusatz = $HausnummerZusatz;
        }

        return $new;
    }

    public function withPostfach(?string $Postfach): self
    {
        $new = clone $this;
        if ($Postfach !== null) {
            Assert::maxLength($Postfach, self::MAX_LENGTH_POSTFACH);
            $new->Postfach = $Postfach;
        }

        return $new;
    }

    public function withLand(string $Land): self
    {
        Assert::oneOf($Land,
            [self::DEUTSCHLAND]
        );
        $new = clone $this;
        $new->Land = $Land;

        return $new;
    }
}