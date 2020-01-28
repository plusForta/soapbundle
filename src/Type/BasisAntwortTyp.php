<?php

namespace PlusForta\RuVSoapBundle\Type;

use PlusForta\RuVSoapBundle\Messages\ResponseStatusInterface;
use Psalm\Internal\Analyzer\StatementsAnalyzer;

class BasisAntwortTyp implements ResponseStatusInterface
{

    /**
     * @var StatusTyp
     */
    private $Status;

    /**
     * @var ?string
     */
    private $Referenznummer;

    /**
     * @var ?BewertungTyp
     */
    private $Bewertung;

    /**
     * @var ?string
     */
    private $Vorgangsnummer;

    /**
     * @return StatusTyp
     */
    public function getStatus(): StatusTyp
    {
        return $this->Status;
    }

    /**
     * @param StatusTyp $Status
     * @return BasisAntwortTyp
     */
    public function withStatus(StatusTyp $Status): BasisAntwortTyp
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getReferenznummer(): ?string
    {
        return $this->Referenznummer;
    }

    /**
     * @param ?string $Referenznummer
     * @return BasisAntwortTyp
     */
    public function withReferenznummer(?string $Referenznummer): BasisAntwortTyp
    {
        $new = clone $this;
        $new->Referenznummer = $Referenznummer;

        return $new;
    }

    /**
     * @return BewertungTyp|null
     */
    public function getBewertung(): ?BewertungTyp
    {
        return $this->Bewertung;
    }

    /**
     * @param BewertungTyp|null $Bewertung
     * @return BasisAntwortTyp
     */
    public function withBewertung(?BewertungTyp $Bewertung): BasisAntwortTyp
    {
        $new = clone $this;
        $new->Bewertung = $Bewertung;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getVorgangsnummer(): ?string
    {
        return $this->Vorgangsnummer;
    }

    /**
     * @param string|null $Vorgangsnummer
     * @return BasisAntwortTyp
     */
    public function withVorgangsnummer(?string $Vorgangsnummer): BasisAntwortTyp
    {
        $new = clone $this;
        $new->Vorgangsnummer = $Vorgangsnummer;

        return $new;
    }


}

