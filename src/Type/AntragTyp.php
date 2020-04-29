<?php


namespace PlusForta\RuVSoapBundle\Type;


use Webmozart\Assert\Assert;

class AntragTyp
{
    /** @var BewertungTyp */
    private $Bewertung;

    /** @var string */
    private $Vorgangsnummer;


    /**
     * @return string|null
     */
    public function getVorgangsnummer(): ?string
    {
        return $this->Vorgangsnummer;
    }

    /**
     * @param string $Referenznummer
     * @return AntragTyp
     */
    public function withVorgangsnummer(string $Referenznummer): AntragTyp
    {
        Assert::maxLength($Referenznummer, 50);
        $new = clone $this;
        $new->Vorgangsnummer = $Referenznummer;

        return $new;
    }

    /**
     * @return BewertungTyp
     */
    public function getBewertung(): BewertungTyp
    {
        return $this->Bewertung;
    }

    /**
     * @param BewertungTyp $Bewertung
     * @return AntragTyp
     */
    public function withBewertung(BewertungTyp $Bewertung): AntragTyp
    {
        $new = clone $this;
        $new->Bewertung = $Bewertung;

        return $new;
    }
}