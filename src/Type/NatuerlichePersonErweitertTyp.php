<?php

namespace PlusForta\RuVSoapBundle\Type;

use DateTimeImmutable;

class NatuerlichePersonErweitertTyp
{
    private NameNatuerlichePersonHerrFrauTyp $Name;
    private AdresseNatuerlichePersonTyp $Adresse;
    private KontaktdatenTyp $Kontaktdaten;
    private string $Geburtsdatum;
    private string $Nationalitaet;

    public function getName(): NameNatuerlichePersonHerrFrauTyp
    {
        return $this->Name;
    }

    public function withName(NameNatuerlichePersonHerrFrauTyp $Name): self
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    public function withAdresse(AdresseNatuerlichePersonTyp $Adresse): self
    {
        $new = clone $this;
        $new->Adresse = $Adresse;

        return $new;
    }

    public function withKontaktdaten(KontaktdatenTyp $Kontaktdaten): self
    {
        $new = clone $this;
        $new->Kontaktdaten = $Kontaktdaten;

        return $new;
    }

    public function withGeburtsdatum(DateTimeImmutable $Geburtsdatum): self
    {
        $new = clone $this;
        $new->Geburtsdatum = $Geburtsdatum->format('d.m.Y');

        return $new;
    }

    public function withNationalitaet(string $Nationalitaet): self
    {
        $new = clone $this;
        $new->Nationalitaet = $Nationalitaet;

        return $new;
    }
}

