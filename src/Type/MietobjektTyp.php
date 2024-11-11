<?php

namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

/**
 * @property string|null HausnummerZusatz
 * @property string|null WeitereObjektbeschreibung
 */
class MietobjektTyp
{
    public const DEUTSCHLAND = 'Deutschland';
    public const MAX_LENGTH_STRASSE = 30;
    public const MAX_LENGTH_HAUSNUMMER = 10;
    public const MAX_LENGTH_HAUSNUMMER_ZUSATZ = 5;
    public const MAX_LENGTH_ORT = 30;
    public const MAX_LENGTH_WEITERE_OBJECTBESCHREIBUNG = 60;

    /**
     * @var string
     */
    private $Strasse;

    /**
     * @var string
     */
    private $Hausnummer;

    /**
     * @var string
     */
    private $Postleitzahl;

    /**
     * @var string
     */
    private $Ort;

    /**
     * @var string
     */
    private $Land = 'Deutschland';


    /**
     * @param string $Strasse
     * @return MietobjektTyp
     */
    public function withStrasse(string $Strasse): MietobjektTyp
    {
        Assert::maxLength($Strasse, self::MAX_LENGTH_STRASSE);
        $new = clone $this;
        $new->Strasse = $Strasse;

        return $new;
    }

    /**
     * @param string $Hausnummer
     * @return MietobjektTyp
     */
    public function withHausnummer(string $Hausnummer): MietobjektTyp
    {
        Assert::maxLength($Hausnummer, self::MAX_LENGTH_HAUSNUMMER);
        $new = clone $this;
        $new->Hausnummer = $Hausnummer;

        return $new;
    }

    /**
     * @param ?string $HausnummerZusatz
     * @return MietobjektTyp
     */
    public function withHausnummerZusatz(?string $HausnummerZusatz): MietobjektTyp
    {
        $new = clone $this;
        if ($HausnummerZusatz !== null) {
            Assert::maxLength($HausnummerZusatz, self::MAX_LENGTH_HAUSNUMMER_ZUSATZ);
            $new->HausnummerZusatz = $HausnummerZusatz;
        }

        return $new;
    }

    /**
     * @param string $Postleitzahl
     * @return MietobjektTyp
     */
    public function withPostleitzahl(string $Postleitzahl): MietobjektTyp
    {
        Assert::length($Postleitzahl, 5);
        $new = clone $this;
        $new->Postleitzahl = $Postleitzahl;

        return $new;
    }

    /**
     * @param string $Ort
     * @return MietobjektTyp
     */
    public function withOrt(string $Ort): MietobjektTyp
    {
        Assert::maxLength($Ort, self::MAX_LENGTH_ORT);
        $new = clone $this;
        $new->Ort = $Ort;

        return $new;
    }

    /**
     * @param string $Land
     * @return MietobjektTyp
     */
    public function withLand(?string $Land): MietobjektTyp
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

    /**
     * @param ?string $WeitereObjektbeschreibung
     * @return MietobjektTyp
     */
    public function withWeitereObjektbeschreibung(?string $WeitereObjektbeschreibung): MietobjektTyp
    {
        $new = clone $this;
        if ($WeitereObjektbeschreibung !== null) {
            Assert::maxLength($WeitereObjektbeschreibung, self::MAX_LENGTH_WEITERE_OBJECTBESCHREIBUNG);
            $new->WeitereObjektbeschreibung = $WeitereObjektbeschreibung;
        }

        return $new;
    }
}
