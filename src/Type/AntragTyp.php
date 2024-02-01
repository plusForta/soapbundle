<?php


namespace PlusForta\RuVSoapBundle\Type;


use Webmozart\Assert\Assert;

class AntragTyp
{
    public const MAX_LENGTH_REFERENZNUMMER = 50;

    private ?BewertungTyp $Bewertung;
    private ?string $Vorgangsnummer;

    public function getVorgangsnummer(): ?string
    {
        return $this->Vorgangsnummer;
    }

    public function withVorgangsnummer(string $Referenznummer): self
    {
        Assert::maxLength($Referenznummer, self::MAX_LENGTH_REFERENZNUMMER);
        $new = clone $this;
        $new->Vorgangsnummer = $Referenznummer;

        return $new;
    }

    public function getBewertung(): BewertungTyp
    {
        return $this->Bewertung;
    }

    public function withBewertung(BewertungTyp $Bewertung): self
    {
        $new = clone $this;
        $new->Bewertung = $Bewertung;

        return $new;
    }
}