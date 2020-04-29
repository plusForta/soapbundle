<?php

namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

/**
 * @property string|null HausnummerZusatz
 * @property string|null WeitereObjektbeschreibung
 */
class MietobjektTyp
{
    const DEUTSCHLAND = 'Deutschland';

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
        Assert::maxLength($Strasse, 30);
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
        Assert::maxLength($Hausnummer, 30);
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
            Assert::maxLength($HausnummerZusatz, 5);
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
        Assert::maxLength($Ort, 30);
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
            Assert::oneOf($Land,
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
            Assert::maxLength($WeitereObjektbeschreibung, 60);
            $new->WeitereObjektbeschreibung = $WeitereObjektbeschreibung;
        }

        return $new;
    }


}

