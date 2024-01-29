<?php


namespace PlusForta\RuVSoapBundle\Messages\Factories;


use PlusForta\RuVSoapBundle\Messages\Dtos\AdresseDto;
use PlusForta\RuVSoapBundle\Type\AdresseNatuerlichePersonTyp;
use PlusForta\RuVSoapBundle\Utils\Modify;

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
        $strasse = $this->adresseDto->strasse;
        return Modify::trim($strasse, AdresseNatuerlichePersonTyp::MAX_LENGTH_STRASSE);
    }

    private function getHausnummer(): string
    {
        $hausnummer = $this->adresseDto->hausnummer;
        return Modify::trim($hausnummer, AdresseNatuerlichePersonTyp::MAX_LENGTH_HAUSNUMMER);
    }

    private function getHausnummerZusatz(): ?string
    {
        $hausnummerZusatz = $this->adresseDto->hausnummerZusatz;
        return Modify::trimOrNull($hausnummerZusatz, AdresseNatuerlichePersonTyp::MAX_LENGTH_HAUSNUMMER_ZUSATZ);
    }

    private function getPostleitzahl(): string
    {
        return $this->adresseDto->postleitzahl;
    }

    private function getOrt(): string
    {
        $ort = $this->adresseDto->ort;
        return Modify::trim($ort, AdresseNatuerlichePersonTyp::MAX_LENGTH_ORT);
    }

    private function getTeilOrt(): ?string
    {
        $teilort = $this->adresseDto->teilort;
        return Modify::trimOrNull($teilort, AdresseNatuerlichePersonTyp::MAX_LENGTH_TEILORT);
    }

    private function getLand(): string
    {
        // hard coded
        return 'Deutschland';
    }

}