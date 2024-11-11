<?php


namespace PlusForta\RuVSoapBundle\Messages;

use PlusForta\RuVSoapBundle\Messages\Dtos\PruefeBonitaetDto;
use PlusForta\RuVSoapBundle\Messages\Factories\KennungFactory;
use PlusForta\RuVSoapBundle\Type\PruefeBonitaetAnfrageTyp;
use PlusForta\RuVSoapBundle\Utils\Modify;

class PruefeBonitaetFactory
{
    /**
     * @var PruefeBonitaetDto
     */
    private $dto;

    /**
     * @var KennungFactory
     */
    private $kennungFactory;

    public function __construct(KennungFactory $kennungFactory)
    {
        $this->kennungFactory = $kennungFactory;
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
        $referenznummer = $this->dto->referenznummer;
        return Modify::trim($referenznummer, PruefeBonitaetAnfrageTyp::MAX_LENGTH_REFERENZNUMMER);
    }

    private function getAnrede(): string
    {
        $anrede = $this->dto->anrede;
        return Modify::trim($anrede, PruefeBonitaetAnfrageTyp::MAX_LENGTH_ANREDE);
    }

    private function getTitel(): string
    {
        $titel = $this->dto->titel;
        return Modify::trim($titel, PruefeBonitaetAnfrageTyp::MAX_LENGTH_TITEL);
    }

    private function getVorname(): string
    {
        return Modify::trim(
            Modify::sanitizeString($this->dto->vorname, true),
            PruefeBonitaetAnfrageTyp::MAX_LENGTH_VORNAME
        );
    }

    private function getNachname(): string
    {
        return Modify::trim(
            Modify::sanitizeString($this->dto->nachname, true),
            PruefeBonitaetAnfrageTyp::MAX_LENGTH_NACHNAME
        );
    }

    private function getStrasse(): string
    {
        return Modify::trim(
            Modify::sanitizeString($this->dto->strasse),
            PruefeBonitaetAnfrageTyp::MAX_LENGTH_STRASSE
        );
    }

    private function getHausnummer(): string
    {
        return Modify::trim(
            Modify::sanitizeString($this->dto->Hausnummer),
            PruefeBonitaetAnfrageTyp::MAX_LENGTH_HAUSNUMMER
        );
    }

    private function getPlz(): string
    {
        return $this->dto->plz;
    }

    private function getOrt(): string
    {
        return Modify::trim(
            Modify::sanitizeString($this->dto->ort),
            PruefeBonitaetAnfrageTyp::MAX_LENGTH_ORT
        );
    }

    private function getLand(): string
    {
        return $this->dto->land;
    }

    private function getGeburtsdatum(): \DateTimeImmutable
    {
        return $this->dto->geburtsdatum;
    }
}
