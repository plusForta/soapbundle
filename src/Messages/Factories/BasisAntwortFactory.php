<?php


namespace PlusForta\RuVSoapBundle\Messages\Factories;


use stdClass;
use InvalidArgumentException;
use Phpro\SoapClient\Type\MixedResult;
use Phpro\SoapClient\Type\ResultInterface;
use PlusForta\RuVSoapBundle\Type\BasisAntwortTyp;
use PlusForta\RuVSoapBundle\Type\BewertungsergebnisEnumTyp;
use PlusForta\RuVSoapBundle\Type\BewertungTyp;
use PlusForta\RuVSoapBundle\Type\CodeEnumTyp;
use PlusForta\RuVSoapBundle\Type\StatusTyp;

class BasisAntwortFactory
{
    private stdClass $result;

    /**
     * @psalm-assert MixedResult $result
     */
    public function create(ResultInterface $result): BasisAntwortTyp
    {
        if (!$result instanceof MixedResult) {
            throw new InvalidArgumentException('Only MixedResult is supported');
        }

        $this->result = $result->getResult();
        $antwort = new BasisAntwortTyp();
        return $antwort
            ->withStatus($this->getStatus())
            ->withReferenznummer($this->getReferenznummer())
            ->withBewertung($this->getBewertung())
            ->withVorgangsnummer($this->getVorgangsnummer())
            ;
    }

    private function getStatus(): StatusTyp
    {
        $status = new StatusTyp();
        return $status
            ->withCode($this->getCode())
            ->withNachricht($this->getNachricht())
            ;
    }

    private function getCode(): CodeEnumTyp
    {
        $code = new CodeEnumTyp();
        return $code->withCode($this->result->Status->Code);
    }

    private function getNachricht(): string
    {
        return $this->result->Status->Nachricht;
    }

    private function getReferenznummer(): ?string
    {
        return $this->result->Referenznummer ?? null;
    }

    private function getBewertung(): ?BewertungTyp
    {
        if (!isset($this->result->Bewertung)) {
            return null;
        }

        $bewertung = new BewertungTyp();
        return $bewertung
            ->withBewertungsergbnis($this->getBewertungsergbnis())
            ->withKommentar($this->getKommentar())
            ;
    }

    private function getBewertungsergbnis(): BewertungsergebnisEnumTyp
    {
        $egebnis = new BewertungsergebnisEnumTyp();
        return $egebnis
            ->withBewertungsergebnis($this->result->Bewertung->Bewertungsergebnis);
    }

    private function getKommentar(): string
    {
        return $this->result->Bewertung->Kommentar;
    }

    private function getVorgangsnummer(): ?string
    {
        return $this->result->Vorgangsnummer ?? null;
    }
}