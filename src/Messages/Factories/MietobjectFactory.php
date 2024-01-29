<?php


namespace PlusForta\RuVSoapBundle\Messages\Factories;


use PlusForta\RuVSoapBundle\Messages\Dtos\MietobjektDto;
use PlusForta\RuVSoapBundle\Type\MietobjektTyp;
use PlusForta\RuVSoapBundle\Utils\Modify;

class MietobjectFactory
{
    private $mietobjektDto;

    public function __construct(MietobjektDto $dto)
    {
        $this->mietobjektDto = $dto;
    }

    public function create(): MietobjektTyp
    {
        $objekt = new MietobjektTyp();
        return $objekt
            ->withStrasse($this->getStrasse())
            ->withHausnummer($this->getHausnummer())
            ->withHausnummerZusatz($this->getHausnummerZusatz())
            ->withPostleitzahl($this->getPostleitzahl())
            ->withOrt($this->getOrt())
            ->withLand($this->getLand())
            ->withWeitereObjektbeschreibung($this->getWeitereObjektbeschreibung())
            ;
    }

    private function getStrasse(): string
    {
        $strasse = $this->mietobjektDto->strasse;
        return Modify::trim($strasse, MietobjektTyp::MAX_LENGTH_STRASSE);
    }

    private function getHausnummer(): string
    {
        $hausnummer = $this->mietobjektDto->hausnummer;
        return Modify::trim($hausnummer, MietobjektTyp::MAX_LENGTH_HAUSNUMMER);
    }

    private function getHausnummerZusatz(): ?string
    {
        $hausnummerZusatz = $this->mietobjektDto->hausnummerZusatz;
        return Modify::trimOrNull($hausnummerZusatz, MietobjektTyp::MAX_LENGTH_HAUSNUMMER_ZUSATZ);
    }

    private function getPostleitzahl(): string
    {
        return $this->mietobjektDto->postleitzahl;
    }

    private function getOrt(): string
    {
        $ort = $this->mietobjektDto->ort;
        return Modify::trim($ort, MietobjektTyp::MAX_LENGTH_ORT);
    }

    private function getLand(): ?string
    {
        return $this->mietobjektDto->land;
    }

    private function getWeitereObjektbeschreibung(): ?string
    {
        $beschreibung = $this->mietobjektDto->beschreibung;
        return Modify::trimOrNull($beschreibung, MietobjektTyp::MAX_LENGTH_WEITERE_OBJECTBESCHREIBUNG);
    }
}