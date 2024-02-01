<?php

namespace PlusForta\RuVSoapBundle\Type;

use PlusForta\RuVSoapBundle\Messages\ResponseStatusInterface;
use Psalm\Internal\Analyzer\StatementsAnalyzer;

class BasisAntwortTyp implements ResponseStatusInterface
{
    private ?StatusTyp $Status;

    private ?string $Referenznummer;

    private ?BewertungTyp $Bewertung;

    private ?string $Vorgangsnummer;

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

    public function getReferenznummer(): ?string
    {
        return $this->Referenznummer;
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
}

