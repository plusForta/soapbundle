<?php

namespace PlusForta\RuVSoapBundle\Type;

use PlusForta\RuVSoapBundle\Messages\ResponseStatusInterface;

class StelleAntragAntwortTyp implements ResponseStatusInterface
{
    /**
     * @var StatusTyp
     */
    private $Status;

    /**
     * @var RechtsgeschaeftTyp|null
     */
    private $Rechtsgeschaeft;

    /**
     * @var string|null
     */
    private $Referenznummer;

    /**
     * @var BewertungTyp|null
     */
    private $Bewertung;

    /**
     * @var string|null
     */
    private $Vorgangsnummer;

    /**
     * @var AntragsdatenIdentifikationTyp|null
     */
    private $AntragsdatenIdentifikation;

    /**
     * @return StatusTyp
     */
    public function getStatus(): StatusTyp
    {
        return $this->Status;
    }

    public function withStatus(StatusTyp $Status): StelleAntragAntwortTyp
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return RechtsgeschaeftTyp|null
     */
    public function getRechtsgeschaeft()
    {
        return $this->Rechtsgeschaeft;
    }


    /**
     * @param ?RechtsgeschaeftTyp $Rechtsgeschaeft
     * @return StelleAntragAntwortTyp
     */
    public function withRechtsgeschaeft(?RechtsgeschaeftTyp $Rechtsgeschaeft): StelleAntragAntwortTyp
    {
        $new = clone $this;
        $new->Rechtsgeschaeft = $Rechtsgeschaeft;

        return $new;
    }

    /**
     * @param ?string $Rechtsgeschaeft
     * @return StelleAntragAntwortTyp
     */
    public function withReferenznummer(?string $Referenznummer): StelleAntragAntwortTyp
    {
        $new = clone $this;
        $new->Referenznummer = $Referenznummer;

        return $new;
    }

    /**
     * @return BewertungTyp|null
     */
    public function getBewertung()
    {
        return $this->Bewertung;
    }

    /**
     * @param ?BewertungTyp $Bewertung
     * @return StelleAntragAntwortTyp
     */
    public function withBewertung(?BewertungTyp $Bewertung): StelleAntragAntwortTyp
    {
        $new = clone $this;
        $new->Bewertung = $Bewertung;

        return $new;
    }


    public function getVorgangsnummer(): ?string
    {
        return $this->Vorgangsnummer;
    }

    /**
     * @param ?string $Vorgangsnummer
     * @return StelleAntragAntwortTyp
     */
    public function withVorgangsnummer(?string $Vorgangsnummer): StelleAntragAntwortTyp
    {
        $new = clone $this;
        $new->Vorgangsnummer = $Vorgangsnummer;

        return $new;
    }


    /**
     * @param ?AntragsdatenIdentifikation $Vorgangsnummer
     * @return StelleAntragAntwortTyp
     */
    public function withAntragsdatenIdentifikation(?AntragsdatenIdentifikationTyp $AntragsdatenIdentifikation): StelleAntragAntwortTyp
    {
        $new = clone $this;
        $new->AntragsdatenIdentifikation = $AntragsdatenIdentifikation;

        return $new;
    }
}
