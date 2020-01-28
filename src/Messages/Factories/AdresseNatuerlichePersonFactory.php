<?php


namespace PlusForta\RuVSoapBundle\Messages\Factories;


use PlusForta\RuVSoapBundle\Messages\Dtos\AdresseDto;
use PlusForta\RuVSoapBundle\Type\AdresseNatuerlichePersonTyp;

class AdresseNatuerlichePersonFactory
{
    /** @var AdresseDto  */
    private $adresseDto;

    public function __construct(AdresseDto $dto)
    {
        $this->adresseDto = $dto;
    }

    public function create(): AdresseNatuerlichePersonTyp
    {
        $adresse = new AdresseNatuerlichePersonTyp();
        return $adresse
            ->withStrasse($this->getStrasse())
            ->withHausnummer($this->getHausnummer())
            ->withHausnummerZusatz($this->getHausnummerZusatz())
            ->withPostleitzahl($this->getPostleitzahl())
            ->withOrt($this->getOrt())
            ->withTeilort($this->getTeilOrt())
            ->withLand($this->getLand())
            ;
    }

    private function getStrasse(): string
    {

        return $this->adresseDto->strasse;
    }

    private function getHausnummer(): string
    {

        return $this->adresseDto->hausnummer;
    }

    private function getHausnummerZusatz(): ?string
    {
        return $this->adresseDto->hausnummerZusatz;
    }

    private function getPostleitzahl(): string
    {
        return $this->adresseDto->postleitzahl;
    }

    private function getOrt(): string
    {
        return $this->adresseDto->ort;
    }

    private function getTeilOrt(): ?string
    {
        return $this->adresseDto->teilort;
    }

    private function getLand(): string
    {
        // hard coded
        return 'Deutschland';
    }

}