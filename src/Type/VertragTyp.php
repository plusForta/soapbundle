<?php

namespace PlusForta\RuVSoapBundle\Type;

class VertragTyp
{
    private RechtsgeschaeftTyp $Rechtsgeschaeft;
    private int $Buergschaftsnummer;
    private float $Buergschaftssumme;
    private AdressdatenTyp $Adressdaten;
    private KlauselnTyp $Klauseln;
    private string $Buergschaft;

    public function getRechtsgeschaeft(): RechtsgeschaeftTyp
    {
        return $this->Rechtsgeschaeft;
    }

    public function withRechtsgeschaeft(RechtsgeschaeftTyp $Rechtsgeschaeft): self
    {
        $new = clone $this;
        $new->Rechtsgeschaeft = $Rechtsgeschaeft;

        return $new;
    }

    public function getBuergschaftsnummer(): int
    {
        return $this->Buergschaftsnummer;
    }

    public function withBuergschaftsnummer(int $Buergschaftsnummer): self
    {
        $new = clone $this;
        $new->Buergschaftsnummer = $Buergschaftsnummer;

        return $new;
    }

    public function getBuergschaftssumme(): float
    {
        return $this->Buergschaftssumme;
    }

    public function withBuergschaftssumme(float $Buergschaftssumme): self
    {
        $new = clone $this;
        $new->Buergschaftssumme = $Buergschaftssumme;

        return $new;
    }

    public function getAdressdaten(): AdressdatenTyp
    {
        return $this->Adressdaten;
    }

    public function withAdressdaten(AdressdatenTyp $Adressdaten): self
    {
        $new = clone $this;
        $new->Adressdaten = $Adressdaten;

        return $new;
    }

    public function getKlauseln(): KlauselnTyp
    {
        return $this->Klauseln;
    }

    public function withKlauseln(KlauselnTyp $Klauseln): self
    {
        $new = clone $this;
        $new->Klauseln = $Klauseln;

        return $new;
    }

    public function getBuergschaft(): string
    {
        return $this->Buergschaft;
    }

    public function withBuergschaft(string $Buergschaft): self
    {
        $new = clone $this;
        $new->Buergschaft = $Buergschaft;

        return $new;
    }
}

