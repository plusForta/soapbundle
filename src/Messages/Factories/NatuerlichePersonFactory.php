<?php


namespace PlusForta\RuVSoapBundle\Messages\Factories;

use PlusForta\RuVSoapBundle\Messages\Dtos\NatuerlichePersonDto;
use PlusForta\RuVSoapBundle\Type\AdresseNatuerlichePersonTyp;
use PlusForta\RuVSoapBundle\Type\AnredeHerrFrauTyp;
use PlusForta\RuVSoapBundle\Type\AnredeTyp;
use PlusForta\RuVSoapBundle\Type\KontaktdatenTyp;
use PlusForta\RuVSoapBundle\Type\NameNatuerlichePersonHerrFrauTyp;
use PlusForta\RuVSoapBundle\Type\NameNatuerlichePersonTyp;
use PlusForta\RuVSoapBundle\Type\NatuerlichePersonErweitertTyp;
use PlusForta\RuVSoapBundle\Type\NatuerlichePersonTyp;
use PlusForta\RuVSoapBundle\Utils\Modify;

class NatuerlichePersonFactory
{
    private $dto;

    public function __construct(NatuerlichePersonDto $dto)
    {
        $this->dto = $dto;
    }

    public function create(): NatuerlichePersonTyp
    {
        $natuerlichePerson = new NatuerlichePersonTyp();
        return $natuerlichePerson
            ->withName($this->getName())
            ->withAdresse($this->getAdresse());
    }

    public function createErweitert(): NatuerlichePersonErweitertTyp
    {
        $natuerlichePerson = new NatuerlichePersonErweitertTyp();
        return $natuerlichePerson
            ->withName($this->getNameErweitert())
            ->withAdresse($this->getAdresse())
            ->withKontaktdaten($this->getKontaktdaten())
            ->withGeburtsdatum($this->getGeburtsdatum())
            ->withNationalitaet($this->getNationalitaet())
        ;
    }

    public function createAdresseOptional()
    {
        $natuerlichePerson = new NatuerlichePersonTyp();
        $natuerlichePerson = $natuerlichePerson->withName($this->getName());

        if ($this->dto->adresse === null) {
            return $natuerlichePerson;
        }

        return $natuerlichePerson->withAdresse($this->getAdresse());
    }

    private function getName(): NameNatuerlichePersonTyp
    {
        $name = new NameNatuerlichePersonTyp();
        return $name
            ->withAnrede($this->getAnrede())
            ->withTitel(Modify::trimOrNull($this->getTitel(), NameNatuerlichePersonTyp::MAX_LENGTH_TITEL))
            ->withVorname($this->getVorname())
            ->withNachname($this->getNachname())
            ->withNamenszusatz(Modify::trimOrNull($this->getNamenszusatz(), NameNatuerlichePersonTyp::MAX_LENGTH_NAMENSZUSATZ))
        ;
    }

    private function getNameErweitert(): NameNatuerlichePersonHerrFrauTyp
    {
        $name = new NameNatuerlichePersonHerrFrauTyp();
        return $name
            ->withAnrede($this->getAnredeErweitert())
            ->withTitel(Modify::trimOrNull($this->getTitel(), NameNatuerlichePersonHerrFrauTyp::MAX_LENGTH_TITEL))
            ->withVorname($this->getVorname())
            ->withNachname($this->getNachname())
            ->withNamenszusatz(Modify::trimOrNull($this->getNamenszusatz(), NameNatuerlichePersonHerrFrauTyp::MAX_LENGTH_NAMENSZUSATZ))
        ;
    }

    private function getAnrede(): AnredeTyp
    {
        $anrede = new AnredeTyp();
        return $anrede->withAnrede($this->dto->anrede);
    }

    private function getAnredeErweitert(): AnredeHerrFrauTyp
    {
        $anrede = new AnredeHerrFrauTyp();
        return $anrede->withAnrede($this->dto->anrede);
    }

    private function getTitel(): ?string
    {
        return $this->dto->titel;
    }

    private function getVorname(): string
    {
        return Modify::trim(
            Modify::sanitizeString($this->dto->vorname, true),
            NameNatuerlichePersonTyp::MAX_LENGTH_VORNAME
        );
    }

    private function getNachname(): string
    {
        return Modify::trim(
            Modify::sanitizeString($this->dto->nachname, true),
            NameNatuerlichePersonTyp::MAX_LENGTH_NACHNAME
        );
    }

    private function getNamenszusatz(): ?string
    {
        return $this->dto->namenszusatz;
    }

    private function getAdresse(): AdresseNatuerlichePersonTyp
    {
        $factory = new AdresseNatuerlichePersonFactory($this->dto->adresse);
        return $factory->create();
    }

    private function getKontaktdaten(): KontaktdatenTyp
    {
        $factory = new KontaktFactory($this->dto->kontaktdaten);
        if ($this->dto->kontaktdaten->isPrivate) {
            return $factory->create(KontaktFactory::PRIVAT);
        }

        return $factory->create(KontaktFactory::GESCHAEFTLICH);
    }

    private function getGeburtsdatum(): \DateTimeImmutable
    {
        return $this->dto->geburtsdatum;
    }

    private function getNationalitaet()
    {
        return $this->dto->nationalitaet;
    }
}
