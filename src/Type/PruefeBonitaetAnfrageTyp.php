<?php

namespace PlusForta\RuVSoapBundle\Type;

use DateTimeImmutable;
use Phpro\SoapClient\Type\RequestInterface;
use Webmozart\Assert\Assert;

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

    private BasisAnfrageTyp $Kennung;
    private string $Vorname;
    private string $Nachname;
    private string $Strasse;
    private string $Plz;
    private string $Ort;
    private ?string $Geburtsdatum = null;
    private ?string $Hausnummer = null;
    private ?string $Titel = null;
    private ?string $Anrede = null;
    private ?string $Referenznummer = null;
    private ?int $Land = null;

    public function withKennung(BasisAnfrageTyp $Kennung): PruefeBonitaetAnfrageTyp
    {
        $new = clone $this;
        $new->Kennung = $Kennung;

        return $new;
    }

    public function withReferenznummer(?string $Referenznummer): self
    {
        $new = clone $this;
        if ($Referenznummer !== null) {
            Assert::maxLength($Referenznummer, self::MAX_LENGTH_REFERENZNUMMER);
            $new->Referenznummer = $Referenznummer;
        }

        return $new;
    }

    public function withAnrede(?string $Anrede): self
    {
        $new = clone $this;
        if ($Anrede !== null) {
            Assert::maxLength($Anrede, self::MAX_LENGTH_ANREDE);
            $new->Anrede = $Anrede;
        }

        return $new;
    }

    public function withTitel(?string $Titel): self
    {
        $new = clone $this;
        if ($Titel !== null) {
            Assert::maxLength($Titel, self::MAX_LENGTH_TITEL);
            $new->Titel = $Titel;
        }

        return $new;
    }

    public function withVorname(string $Vorname): self
    {
        Assert::maxLength($Vorname, self::MAX_LENGTH_VORNAME);
        $new = clone $this;
        $new->Vorname = $Vorname;

        return $new;
    }

    public function withNachname(string $Nachname): self
    {
        Assert::maxLength($Nachname, self::MAX_LENGTH_NACHNAME);
        $new = clone $this;
        $new->Nachname = $Nachname;

        return $new;
    }

    public function withStrasse(string $Strasse): self
    {
        Assert::maxLength($Strasse, self::MAX_LENGTH_STRASSE);
        $new = clone $this;
        $new->Strasse = $Strasse;

        return $new;
    }

    public function withHausnummer(?string $Hausnummer): self
    {
        $new = clone $this;
        if ($Hausnummer !== null) {
            Assert::maxLength($Hausnummer, self::MAX_LENGTH_HAUSNUMMER);
            $new->Hausnummer = $Hausnummer;
        }

        return $new;
    }

    public function withPlz(string $Plz): self
    {
        Assert::length($Plz, 5);
        $new = clone $this;
        $new->Plz = $Plz;

        return $new;
    }

    public function withOrt(string $Ort): self
    {
        Assert::maxLength($Ort, self::MAX_LENGTH_ORT);
        $new = clone $this;
        $new->Ort = $Ort;

        return $new;
    }

    public function withLand(?int $Land): self
    {
        $new = clone $this;
        if ($Land !== null) {
            $new->Land = $Land;
        }

        return $new;
    }

    public function withGeburtsdatum(?DateTimeImmutable $Geburtsdatum): self
    {
        $new = clone $this;
        if ($Geburtsdatum instanceof DateTimeImmutable) {
            $new->Geburtsdatum = $Geburtsdatum->format('d.m.Y');
        }

        return $new;
    }
}

