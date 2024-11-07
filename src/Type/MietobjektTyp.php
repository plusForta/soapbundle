<?php

namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

class MietobjektTyp
{
    public const DEUTSCHLAND = 'Deutschland';
    public const MAX_LENGTH_STRASSE = 30;
    public const MAX_LENGTH_HAUSNUMMER = 10;
    public const MAX_LENGTH_HAUSNUMMER_ZUSATZ = 5;
    public const MAX_LENGTH_ORT = 30;
    public const MAX_LENGTH_WEITERE_OBJECTBESCHREIBUNG = 60;

    private string $Strasse;
    private string $Hausnummer;
    private string $Postleitzahl;
    private string $Ort;
    private string $Land = 'Deutschland';
    private ?string $HausnummerZusatz = null;
    private ?string $WeitereObjektbeschreibung = null;

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

    public function withPostleitzahl(string $Postleitzahl): self
    {
        Assert::length($Postleitzahl, 5);
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

    public function withLand(?string $Land): self
    {
        $new = clone $this;
        if ($Land !== null) {
            Assert::oneOf(
                $Land,
                [self::DEUTSCHLAND]
            );
            $new->Land = $Land;
        }

        return $new;
    }

    public function withWeitereObjektbeschreibung(?string $WeitereObjektbeschreibung): self
    {
        $new = clone $this;
        if ($WeitereObjektbeschreibung !== null) {
            Assert::maxLength($WeitereObjektbeschreibung, self::MAX_LENGTH_WEITERE_OBJECTBESCHREIBUNG);
            $new->WeitereObjektbeschreibung = $WeitereObjektbeschreibung;
        }

        return $new;
    }
}
