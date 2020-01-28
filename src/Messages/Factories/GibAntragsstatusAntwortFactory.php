<?php


namespace PlusForta\RuVSoapBundle\Messages\Factories;


use Phpro\SoapClient\Type\MixedResult;
use Phpro\SoapClient\Type\ResultInterface;
use PlusForta\RuVSoapBundle\Type\AntraegeTyp;
use PlusForta\RuVSoapBundle\Type\AntragTyp;
use PlusForta\RuVSoapBundle\Type\BewertungsergebnisEnumTyp;
use PlusForta\RuVSoapBundle\Type\BewertungTyp;
use PlusForta\RuVSoapBundle\Type\CodeEnumTyp;
use PlusForta\RuVSoapBundle\Type\GibAntragsstatusAntwortTyp;
use PlusForta\RuVSoapBundle\Type\StatusTyp;

class GibAntragsstatusAntwortFactory
{

    /** @var \stdClass */
    private $result;

    public function create(ResultInterface $result): GibAntragsstatusAntwortTyp
    {
        if (!$result instanceof MixedResult) {
            throw new \InvalidArgumentException('Only MixedResult is supported');
        }
        
        $this->result = $result->getResult();
        $antwort = new GibAntragsstatusAntwortTyp();
        return $antwort
            ->withStatus($this->getStatus())
            ->withAntraege($this->getAntraege())
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

    private function getAntraege(): AntraegeTyp
    {
        $antraege = new AntraegeTyp();
        return $antraege->withAntrag($this->getAntrag());
    }

    private function getAntrag()
    {
        $antrag = new AntragTyp();

        return $antrag
            ->withVorgangsnummer($this->result->Antraege->Antrag->Vorgangsnummer)
            ->withBewertung($this->getBewertung());
    }

    private function getBewertung(): BewertungTyp
    {
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
            ->withBewertungsergebnis($this->result->Antraege->Antrag->Bewertung->Bewertungsergebnis);
        ;
    }

    private function getKommentar(): string
    {
        return $this->result->Antraege->Antrag->Bewertung->Kommentar;
    }


}