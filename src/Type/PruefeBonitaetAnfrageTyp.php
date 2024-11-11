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
    public const MAX_LENGTH_REFERENZNUMMER = 30;
    public const MAX_LENGTH_ANREDE = 10;
    public const MAX_LENGTH_TITEL = 10;
    public const MAX_LENGTH_VORNAME = 50;
    public const MAX_LENGTH_NACHNAME = 50;
    public const MAX_LENGTH_STRASSE = 50;
    public const MAX_LENGTH_HAUSNUMMER = 15;
    public const MAX_LENGTH_ORT = 50;

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
            Assert::maxLength($Referenznummer, self::MAX_LENGTH_REFERENZNUMMER);
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
            Assert::maxLength($Anrede, self::MAX_LENGTH_ANREDE);
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
            Assert::maxLength($Titel, self::MAX_LENGTH_TITEL);
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
        Assert::maxLength($Vorname, self::MAX_LENGTH_VORNAME);
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
        Assert::maxLength($Nachname, self::MAX_LENGTH_NACHNAME);
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
        Assert::maxLength($Strasse, self::MAX_LENGTH_STRASSE);
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
            Assert::maxLength($Hausnummer, self::MAX_LENGTH_HAUSNUMMER);
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
        Assert::maxLength($Ort, self::MAX_LENGTH_ORT);
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
