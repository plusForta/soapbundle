<?php

namespace PlusForta\RuVSoapBundle\Type;

use PlusForta\RuVSoapBundle\Messages\ResponseStatusInterface;

class StelleAntragAntwortTyp implements ResponseStatusInterface
{
    private StatusTyp $Status;
    private ?RechtsgeschaeftTyp $Rechtsgeschaeft = null;
    private ?BewertungTyp $Bewertung = null;
    private ?string $Vorgangsnummer = null;
    private ?AntragsdatenIdentifikationTyp $AntragsdatenIdentifikation = null;
    private ?string $Referenznummer = null;

    public function getStatus(): StatusTyp
    {
        return $this->Status;
    }

    public function withStatus(StatusTyp $Status): self
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    public function getRechtsgeschaeft(): ?RechtsgeschaeftTyp
    {
        return $this->Rechtsgeschaeft;
    }

    public function withRechtsgeschaeft(?RechtsgeschaeftTyp $Rechtsgeschaeft): self
    {
        $new = clone $this;
        $new->Rechtsgeschaeft = $Rechtsgeschaeft;

        return $new;
    }

    public function withReferenznummer(?string $Referenznummer): self
    {
        $new = clone $this;
        $new->Referenznummer = $Referenznummer;

        return $new;
    }

    public function getBewertung(): ?BewertungTyp
    {
        return $this->Bewertung;
    }

    public function withBewertung(?BewertungTyp $Bewertung): self
    {
        $new = clone $this;
        $new->Bewertung = $Bewertung;

        return $new;
    }

    public function getVorgangsnummer(): ?string
    {
        return $this->Vorgangsnummer;
    }

    public function withVorgangsnummer(?string $Vorgangsnummer): self
    {
        $new = clone $this;
        $new->Vorgangsnummer = $Vorgangsnummer;

        return $new;
    }

    public function withAntragsdatenIdentifikation(?AntragsdatenIdentifikationTyp $AntragsdatenIdentifikation): self
    {
        $new = clone $this;
        $new->AntragsdatenIdentifikation = $AntragsdatenIdentifikation;

        return $new;
    }
}

