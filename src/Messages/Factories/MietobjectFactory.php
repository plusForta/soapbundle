<?php


namespace PlusForta\RuVSoapBundle\Messages\Factories;


use PlusForta\RuVSoapBundle\Messages\Dtos\MietobjektDto;
use PlusForta\RuVSoapBundle\Type\MietobjektTyp;

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
        return $this->mietobjektDto->strasse;
    }

    private function getHausnummer(): string
    {
        return $this->mietobjektDto->hausnummer;
    }

    private function getHausnummerZusatz(): ?string
    {
        return $this->mietobjektDto->hausnummerZusatz;
    }

    private function getPostleitzahl(): string
    {
        return $this->mietobjektDto->postleitzahl;
    }

    private function getOrt(): string
    {
        return $this->mietobjektDto->ort;
    }

    private function getLand(): ?string
    {
        return $this->mietobjektDto->land;
    }

    private function getWeitereObjektbeschreibung(): ?string
    {
        return $this->mietobjektDto->beschreibung;
    }
}