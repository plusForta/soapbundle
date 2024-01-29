<?php


namespace PlusForta\RuVSoapBundle\Messages\Factories;


use Phpro\SoapClient\Type\MixedResult;
use Phpro\SoapClient\Type\ResultInterface;
use PlusForta\RuVSoapBundle\Type\AntragsdatenIdentifikationTyp;
use PlusForta\RuVSoapBundle\Type\BewertungsergebnisEnumTyp;
use PlusForta\RuVSoapBundle\Type\BewertungTyp;
use PlusForta\RuVSoapBundle\Type\CodeEnumTyp;
use PlusForta\RuVSoapBundle\Type\RechtsgeschaeftTyp;
use PlusForta\RuVSoapBundle\Type\StatusTyp;
use PlusForta\RuVSoapBundle\Type\StelleAntragAntwortTyp;

class StelleAntragAntwortFactory
{

    /** @var \stdClass */
    private $result;

    public function create(ResultInterface $result): StelleAntragAntwortTyp
    {
        if (!$result instanceof MixedResult) {
            throw new \InvalidArgumentException('Only MixedResult is supported');
        }

        $this->result = $result->getResult();
        $antwort = new StelleAntragAntwortTyp();
        return $antwort
            ->withStatus($this->getStatus())
            ->withReferenznummer($this->getReferenznummer())
            ->withBewertung($this->getBewertung())
            ->withVorgangsnummer($this->getVorgangsnummer())
            ->withRechtsgeschaeft($this->getRechtsgeschaeft())
            ->withAntragsdatenIdentifikation($this->getAntragsdatenIdentifikation())
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
        return isset($this->result->Referenznummer) ? $this->result->Referenznummer : null;
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
        ;
    }

    private function getKommentar(): string
    {
        return $this->result->Bewertung->Kommentar;
    }

    private function getVorgangsnummer(): ?string
    {
        return isset($this->result->Vorgangsnummer) ? $this->result->Vorgangsnummer : null;
    }

    private function getRechtsgeschaeft(): ?RechtsgeschaeftTyp
    {
        if (!isset($this->result->Rechtsgeschaeft)) {
            return null;
        }
        
        $rechtsgeschaeft = new RechtsgeschaeftTyp();
        return $rechtsgeschaeft
            ->withArbeitsgebiet((int) $this->result->Rechtsgeschaeft->Arbeitsgebiet)
            ->withVersicherungsnummer((int) $this->result->Rechtsgeschaeft->Versicherungsnummer)
            ;
    }

    private function getAntragsdatenIdentifikation(): ?AntragsdatenIdentifikationTyp
    {
        if (!isset($this->result->AntragsdatenIdentifikation)) {
            return null;
        }

        $identifikation = new AntragsdatenIdentifikationTyp();
        return $identifikation
            ->withAntragsdatenID($this->result->AntragsdatenIdentifikation->AntragsdatenID)
            ->withBuergschaftstextVersion($this->result->AntragsdatenIdentifikation->BuergschaftstextVersion)
            ;
    }


}