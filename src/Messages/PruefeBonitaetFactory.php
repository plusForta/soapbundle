<?php


namespace PlusForta\RuVSoapBundle\Messages;


use DateTimeImmutable;
use PlusForta\RuVSoapBundle\Messages\Dtos\PruefeBonitaetDto;
use PlusForta\RuVSoapBundle\Messages\Factories\KennungFactory;
use PlusForta\RuVSoapBundle\Type\PruefeBonitaetAnfrageTyp;
use PlusForta\RuVSoapBundle\Utils\Modify;

class PruefeBonitaetFactory
{
    private PruefeBonitaetDto $dto;

    public function __construct(private readonly KennungFactory $kennungFactory)
    {
    }

    public function create(PruefeBonitaetDto $dto): PruefeBonitaetAnfrageTyp
    {
        $this->dto = $dto;
        $anfrage = new PruefeBonitaetAnfrageTyp();

        return $anfrage->withKennung($this->getKennung())
            ->withReferenznummer($this->getReferenznummer())
            ->withAnrede($this->getAnrede())
            ->withTitel($this->getTitel())
            ->withVorname($this->getVorname())
            ->withNachname($this->getNachname())
            ->withStrasse($this->getStrasse())
            ->withHausnummer($this->getHausnummer())
            ->withPlz($this->getPlz())
            ->withOrt($this->getOrt())
            ->withLand($this->getLand())
            ->withGeburtsdatum($this->getGeburtsdatum())
            ;
    }

    private function getKennung()
    {
        return $this->kennungFactory->create($this->dto->kennungDto);
    }

    private function getReferenznummer(): string
    {
        return Modify::trim($this->dto->referenznummer, PruefeBonitaetAnfrageTyp::MAX_LENGTH_REFERENZNUMMER);
    }

    private function getAnrede(): string
    {
        return Modify::trim($this->dto->anrede, PruefeBonitaetAnfrageTyp::MAX_LENGTH_ANREDE);
    }

    private function getTitel(): string
    {
        return Modify::trim($this->dto->titel, PruefeBonitaetAnfrageTyp::MAX_LENGTH_TITEL);
    }

    private function getVorname(): string
    {
        return Modify::trim($this->dto->vorname, PruefeBonitaetAnfrageTyp::MAX_LENGTH_VORNAME);
    }

    private function getNachname(): string
    {
        return Modify::trim($this->dto->nachname, PruefeBonitaetAnfrageTyp::MAX_LENGTH_NACHNAME);
    }

    private function getStrasse(): string
    {
        return Modify::trim($this->dto->strasse, PruefeBonitaetAnfrageTyp::MAX_LENGTH_STRASSE);
    }

    private function getHausnummer(): string
    {
        return Modify::trim($this->dto->Hausnummer, PruefeBonitaetAnfrageTyp::MAX_LENGTH_HAUSNUMMER);
    }

    private function getPlz(): string
    {
        return $this->dto->plz;
    }

    private function getOrt(): string
    {
        return Modify::trim($this->dto->ort, PruefeBonitaetAnfrageTyp::MAX_LENGTH_ORT);
    }

    private function getLand(): string
    {
        return $this->dto->land;
    }

    private function getGeburtsdatum(): DateTimeImmutable
    {
        return $this->dto->geburtsdatum;
    }
}