<?php


namespace PlusForta\RuVSoapBundle\Messages;


use PlusForta\RuVSoapBundle\Messages\Dtos\PruefeBonitaetDto;
use PlusForta\RuVSoapBundle\Messages\Factories\KennungFactory;
use PlusForta\RuVSoapBundle\Type\PruefeBonitaetAnfrageTyp;

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

    private function getReferenznummer()
    {
        return $this->dto->referenznummer;
    }

    private function getAnrede()
    {
        return $this->dto->anrede;
    }

    private function getTitel()
    {
        return $this->dto->titel;
    }

    private function getVorname()
    {
        return $this->dto->vorname;
    }

    private function getNachname()
    {
        return $this->dto->nachname;
    }

    private function getStrasse()
    {
        return $this->dto->strasse;
    }

    private function getHausnummer()
    {
        return $this->dto->Hausnummer;
    }

    private function getPlz()
    {
        return $this->dto->plz;
    }

    private function getOrt()
    {
        return $this->dto->ort;
    }

    private function getLand()
    {
        return $this->dto->land;
    }

    private function getGeburtsdatum(): \DateTimeImmutable
    {
        return $this->dto->geburtsdatum;
    }


}