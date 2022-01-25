<?php

namespace PlusForta\RuVSoapBundle\Type;

class VertragTyp
{
    /**
     * @var \PlusForta\RuVSoapBundle\Type\RechtsgeschaeftTyp
     */
    private $Rechtsgeschaeft;

    /**
     * @var int
     */
    private $Buergschaftsnummer;

    /**
     * @var float
     */
    private $Buergschaftssumme;

    /**
     * @var \PlusForta\RuVSoapBundle\Type\AdressdatenTyp
     */
    private $Adressdaten;

    /**
     * @var \PlusForta\RuVSoapBundle\Type\KlauselnTyp
     */
    private $Klauseln;

    /**
     * @var string
     */
    private $Buergschaft;

    /**
     * @return \PlusForta\RuVSoapBundle\Type\RechtsgeschaeftTyp
     */
    public function getRechtsgeschaeft()
    {
        return $this->Rechtsgeschaeft;
    }

    /**
     * @param \PlusForta\RuVSoapBundle\Type\RechtsgeschaeftTyp $Rechtsgeschaeft
     * @return VertragTyp
     */
    public function withRechtsgeschaeft($Rechtsgeschaeft)
    {
        $new = clone $this;
        $new->Rechtsgeschaeft = $Rechtsgeschaeft;

        return $new;
    }

    /**
     * @return int
     */
    public function getBuergschaftsnummer()
    {
        return $this->Buergschaftsnummer;
    }

    /**
     * @param int $Buergschaftsnummer
     * @return VertragTyp
     */
    public function withBuergschaftsnummer($Buergschaftsnummer)
    {
        $new = clone $this;
        $new->Buergschaftsnummer = $Buergschaftsnummer;

        return $new;
    }

    /**
     * @return float
     */
    public function getBuergschaftssumme()
    {
        return $this->Buergschaftssumme;
    }

    /**
     * @param float $Buergschaftssumme
     * @return VertragTyp
     */
    public function withBuergschaftssumme($Buergschaftssumme)
    {
        $new = clone $this;
        $new->Buergschaftssumme = $Buergschaftssumme;

        return $new;
    }

    /**
     * @return \PlusForta\RuVSoapBundle\Type\AdressdatenTyp
     */
    public function getAdressdaten()
    {
        return $this->Adressdaten;
    }

    /**
     * @param \PlusForta\RuVSoapBundle\Type\AdressdatenTyp $Adressdaten
     * @return VertragTyp
     */
    public function withAdressdaten($Adressdaten)
    {
        $new = clone $this;
        $new->Adressdaten = $Adressdaten;

        return $new;
    }

    /**
     * @return \PlusForta\RuVSoapBundle\Type\KlauselnTyp
     */
    public function getKlauseln()
    {
        return $this->Klauseln;
    }

    /**
     * @param \PlusForta\RuVSoapBundle\Type\KlauselnTyp $Klauseln
     * @return VertragTyp
     */
    public function withKlauseln($Klauseln)
    {
        $new = clone $this;
        $new->Klauseln = $Klauseln;

        return $new;
    }

    /**
     * @return string
     */
    public function getBuergschaft()
    {
        return $this->Buergschaft;
    }

    /**
     * @param string $Buergschaft
     * @return VertragTyp
     */
    public function withBuergschaft($Buergschaft)
    {
        $new = clone $this;
        $new->Buergschaft = $Buergschaft;

        return $new;
    }
}

