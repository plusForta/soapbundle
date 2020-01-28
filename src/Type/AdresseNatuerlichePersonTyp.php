<?php

namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

/**
 * @property string|null HausnummerZusatz
 * @property string|null Teilort
 */
class AdresseNatuerlichePersonTyp
{

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
     * @var mixed
     */
    private $Land = 'Deutschland';

    /**
     * @param string $Strasse
     * @return AdresseNatuerlichePersonTyp
     */
    public function withStrasse(string $Strasse): AdresseNatuerlichePersonTyp
    {
        $new = clone $this;
        $new->Strasse = $Strasse;

        return $new;
    }

    /**
     * @param string $Hausnummer
     * @return AdresseNatuerlichePersonTyp
     */
    public function withHausnummer(string $Hausnummer): AdresseNatuerlichePersonTyp
    {
        $new = clone $this;
        $new->Hausnummer = $Hausnummer;

        return $new;
    }

    /**
     * @param string $HausnummerZusatz
     * @return AdresseNatuerlichePersonTyp
     */
    public function withHausnummerZusatz(?string $HausnummerZusatz): AdresseNatuerlichePersonTyp
    {
        $new = clone $this;
        if ($HausnummerZusatz !== null) {
            $new->HausnummerZusatz = $HausnummerZusatz;
        }

        return $new;
    }

    /**
     * @param string $Postleitzahl
     * @return AdresseNatuerlichePersonTyp
     */
    public function withPostleitzahl(string $Postleitzahl): AdresseNatuerlichePersonTyp
    {
        Assert::length($Postleitzahl, 5);

        $new = clone $this;
        $new->Postleitzahl = $Postleitzahl;

        return $new;
    }

    /**
     * @param string $Ort
     * @return AdresseNatuerlichePersonTyp
     */
    public function withOrt(string $Ort): AdresseNatuerlichePersonTyp
    {
        $new = clone $this;
        $new->Ort = $Ort;

        return $new;
    }

    /**
     * @param string $Teilort
     * @return AdresseNatuerlichePersonTyp
     */
    public function withTeilort(?string $Teilort): AdresseNatuerlichePersonTyp
    {
        $new = clone $this;
        if ($Teilort !== null) {
            $new->Teilort = $Teilort;
        }

        return $new;
    }

    /**
     * @param string $Land
     * @return AdresseNatuerlichePersonTyp
     */
    public function withLand(string $Land): AdresseNatuerlichePersonTyp
    {
        $new = clone $this;
        $new->Land = $Land;

        return $new;
    }


}

