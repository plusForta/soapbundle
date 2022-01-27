<?php

namespace PlusForta\RuVSoapBundle\Messages\Factories;

use Phpro\SoapClient\Type\MixedResult;
use Phpro\SoapClient\Type\ResultInterface;
use PlusForta\RuVSoapBundle\Type\AdressdatenTyp;
use PlusForta\RuVSoapBundle\Type\AnredeHerrFrauTyp;
use PlusForta\RuVSoapBundle\Type\CodeEnumTyp;
use PlusForta\RuVSoapBundle\Type\GibVertragsdatenAntwortTyp;
use PlusForta\RuVSoapBundle\Type\NameNatuerlichePersonHerrFrauTyp;
use PlusForta\RuVSoapBundle\Type\NatuerlichePersonErweitertTyp;
use PlusForta\RuVSoapBundle\Type\RechtsgeschaeftTyp;
use PlusForta\RuVSoapBundle\Type\StatusTyp;
use PlusForta\RuVSoapBundle\Type\VersicherungsnehmerTyp;
use PlusForta\RuVSoapBundle\Type\VertragTyp;

class GibVertragsdatenAntwortFactory
{
    /** @var \stdClass */
    private $result;

    public function create(ResultInterface $result): GibVertragsdatenAntwortTyp
    {
        if (!$result instanceof MixedResult) {
            throw new \InvalidArgumentException('Only MixedResult is supported');
        }

        $this->result = $result->getResult();
        $antwort = new GibVertragsdatenAntwortTyp();
        return $antwort
            ->withStatus($this->getStatus())
            ->withVertrag($this->getVertrag())
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

    private function getVertrag(): VertragTyp
    {
        $vertrag = new VertragTyp();
        return $vertrag
            ->withRechtsgeschaeft($this->getRechtsgeschaeft())
            ->withBuergschaftsnummer((int) $this->result->Vertrag->Buergschaftsnummer)
            ->withBuergschaftssumme((float) $this->result->Vertrag->Buergschaftssumme)
            ->withAdressdaten($this->getAdressdaten())
//            ->withKlauseln()
            ->withBuergschaft($this->getBuergschaft())
            ;
    }

    private function getRechtsgeschaeft(): RechtsgeschaeftTyp
    {
        $rechtsgeschaeft = new RechtsgeschaeftTyp();
        return $rechtsgeschaeft
            ->withArbeitsgebiet((int) $this->result->Rechtsgeschaeft->Arbeitsgebiet)
            ->withVersicherungsnummer((int) $this->result->Rechtsgeschaeft->Versicherungsnummer)
            ;
    }

    private function getAdressdaten(): AdressdatenTyp
    {
        $adressdaten = new AdressdatenTyp();
        return $adressdaten
            ->withVersicherungsnehmer($this->getVersicherungsnehmer())
//            ->withVermieter()
//            ->withMietobjekt()
//            ->withAbweichBuergEmpfaenger()
            ;
    }

    private function getVersicherungsnehmer(): VersicherungsnehmerTyp
    {
        $versicherungsnehmer = new VersicherungsnehmerTyp();
        return $versicherungsnehmer
            ->withNatuerlichePerson($this->getNatuerlichePerson())
//            ->withGemeinschaft()
            ;
    }

    private function getNatuerlichePerson(): NatuerlichePersonErweitertTyp
    {
        $person = new NatuerlichePersonErweitertTyp();
        return $person
            ->withName($this->getName())
//            ->withAdresse()
//            ->withKontaktdaten()
//            ->withGeburtsdatum()
//            ->withNationalitaet()
            ;
    }

    private function getName(): NameNatuerlichePersonHerrFrauTyp
    {
        $name = new NameNatuerlichePersonHerrFrauTyp();
        return $name;
    }

    
    private function getBuergschaft(): ?string
    {
        return $this->result->Vertrag->Buergschaft;
    }


}