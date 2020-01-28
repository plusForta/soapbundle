<?php

namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

/**
 * @property string|null HausnummerZusatz
 * @property string|null Postfach
 */
class AdresseJuristischePersonTyp
{

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
    private $Strasse;

    /**
     * @var string
     */
    private $Hausnummer;


    /**
     * @var mixed
     */
    private $Land = 'Deutschland';

    /**
     * @param string $Postleitzahl
     * @return AdresseJuristischePersonTyp
     */
    public function withPostleitzahl(string $Postleitzahl): AdresseJuristischePersonTyp
    {
        Assert::length($Postleitzahl, 5);
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
        $new = clone $this;
        $new->Land = $Land;

        return $new;
    }


}

