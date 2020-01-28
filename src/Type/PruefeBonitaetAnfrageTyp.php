<?php

namespace PlusForta\RuVSoapBundle\Type;

use DateTimeImmutable;
use Phpro\SoapClient\Type\RequestInterface;
use Webmozart\Assert\Assert;

/**
 * @property string|null Geburtsdatum
 * @property string|null Hausnummer
 * @property string|null Titel
 * @property string|null Anrede
 * @property string|null Referenznummer
 */
class PruefeBonitaetAnfrageTyp implements RequestInterface
{

    /**
     * @var BasisAnfrageTyp
     */
    private $Kennung;

    /**
     * @var string
     */
    private $Vorname;

    /**
     * @var string
     */
    private $Nachname;

    /**
     * @var string
     */
    private $Strasse;

    /**
     * @var string
     */
    private $Plz;

    /**
     * @var string
     */
    private $Ort;

    /**
     * @var int
     */
    private $Land = 276;

    /**
     * @param BasisAnfrageTyp $Kennung
     * @return PruefeBonitaetAnfrageTyp
     */
    public function withKennung(BasisAnfrageTyp $Kennung): PruefeBonitaetAnfrageTyp
    {
        $new = clone $this;
        $new->Kennung = $Kennung;

        return $new;
    }

    /**
     * @param ?string $Referenznummer
     * @return PruefeBonitaetAnfrageTyp
     */
    public function withReferenznummer(?string $Referenznummer): PruefeBonitaetAnfrageTyp
    {
        $new = clone $this;
        if ($Referenznummer !== null) {
            $new->Referenznummer = $Referenznummer;
        }

        return $new;
    }

    /**
     * @param ?string $Anrede
     * @return PruefeBonitaetAnfrageTyp
     */
    public function withAnrede(?string $Anrede): PruefeBonitaetAnfrageTyp
    {
        $new = clone $this;
        if ($Anrede !== null) {
            $new->Anrede = $Anrede;
        }

        return $new;
    }

    /**
     * @param string $Titel
     * @return PruefeBonitaetAnfrageTyp
     */
    public function withTitel(?string $Titel): PruefeBonitaetAnfrageTyp
    {
        $new = clone $this;
        if ($Titel !== null) {
            $new->Titel = $Titel;
        }

        return $new;
    }

    /**
     * @param string $Vorname
     * @return PruefeBonitaetAnfrageTyp
     */
    public function withVorname(string $Vorname): PruefeBonitaetAnfrageTyp
    {
        $new = clone $this;
        $new->Vorname = $Vorname;

        return $new;
    }

    /**
     * @param string $Nachname
     * @return PruefeBonitaetAnfrageTyp
     */
    public function withNachname(string $Nachname): PruefeBonitaetAnfrageTyp
    {
        $new = clone $this;
        $new->Nachname = $Nachname;

        return $new;
    }

    /**
     * @param string $Strasse
     * @return PruefeBonitaetAnfrageTyp
     */
    public function withStrasse(string $Strasse): PruefeBonitaetAnfrageTyp
    {
        $new = clone $this;
        $new->Strasse = $Strasse;

        return $new;
    }

    /**
     * @param ?string $Hausnummer
     * @return PruefeBonitaetAnfrageTyp
     */
    public function withHausnummer(?string $Hausnummer): PruefeBonitaetAnfrageTyp
    {
        $new = clone $this;
        if ($Hausnummer !== null) {
            $new->Hausnummer = $Hausnummer;
        }

        return $new;
    }

    /**
     * @param string $Plz
     * @return PruefeBonitaetAnfrageTyp
     */
    public function withPlz(string $Plz): PruefeBonitaetAnfrageTyp
    {
        Assert::length($Plz, 5);
        $new = clone $this;
        $new->Plz = $Plz;

        return $new;
    }

    /**
     * @param string $Ort
     * @return PruefeBonitaetAnfrageTyp
     */
    public function withOrt(string $Ort): PruefeBonitaetAnfrageTyp
    {
        $new = clone $this;
        $new->Ort = $Ort;

        return $new;
    }

    /**
     * @param ?int $Land
     * @return PruefeBonitaetAnfrageTyp
     */
    public function withLand(?int $Land): PruefeBonitaetAnfrageTyp
    {
        $new = clone $this;
        if ($Land !== null) {
            $new->Land = $Land;
        }

        return $new;
    }

    /**
     * @param ?DateTimeImmutable $Geburtsdatum
     * @return PruefeBonitaetAnfrageTyp
     */
    public function withGeburtsdatum(?DateTimeImmutable $Geburtsdatum): PruefeBonitaetAnfrageTyp
    {
        $new = clone $this;
        if ($Geburtsdatum !== null) {
            $new->Geburtsdatum = $Geburtsdatum->format('d.m.Y');
        }

        return $new;
    }


}

