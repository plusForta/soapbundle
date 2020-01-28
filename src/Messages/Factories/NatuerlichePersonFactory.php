<?php


namespace PlusForta\RuVSoapBundle\Messages\Factories;


use PlusForta\RuVSoapBundle\Messages\Dtos\NatuerlichePersonDto;
use PlusForta\RuVSoapBundle\Type\AdresseNatuerlichePersonTyp;
use PlusForta\RuVSoapBundle\Type\AnredeHerrFrauTyp;
use PlusForta\RuVSoapBundle\Type\AnredeTyp;
use PlusForta\RuVSoapBundle\Type\GeschaeftlichTyp;
use PlusForta\RuVSoapBundle\Type\KontaktdatenTyp;
use PlusForta\RuVSoapBundle\Type\NameNatuerlichePersonHerrFrauTyp;
use PlusForta\RuVSoapBundle\Type\NameNatuerlichePersonTyp;
use PlusForta\RuVSoapBundle\Type\NatuerlichePersonErweitertTyp;
use PlusForta\RuVSoapBundle\Type\NatuerlichePersonTyp;
use PlusForta\RuVSoapBundle\Type\PrivatTyp;

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
            ->withTitel($this->getTitel())
            ->withVorname($this->getVorname())
            ->withNachname($this->getNachname())
            ->withNamenszusatz($this->getNamenszusatz())
            ;
    }

    private function getNameErweitert(): NameNatuerlichePersonHerrFrauTyp
    {
        $name = new NameNatuerlichePersonHerrFrauTyp();
        return $name
            ->withAnrede($this->getAnredeErweitert())
            ->withTitel($this->getTitel())
            ->withVorname($this->getVorname())
            ->withNachname($this->getNachname())
            ->withNamenszusatz($this->getNamenszusatz())
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
        return $this->dto->vorname;
    }

    private function getNachname(): string
    {
        return $this->dto->nachname;
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