<?php


namespace PlusForta\RuVSoapBundle\Messages\Factories;


use PlusForta\RuVSoapBundle\Messages\Dtos\JuristischePersonDto;
use PlusForta\RuVSoapBundle\Type\AdresseJuristischePersonTyp;
use PlusForta\RuVSoapBundle\Type\AnredeTyp;
use PlusForta\RuVSoapBundle\Type\JuristischePersonTyp;
use PlusForta\RuVSoapBundle\Type\NameJuristischePersonTyp;
use PlusForta\RuVSoapBundle\Utils\Modify;

class JuristischePersonFactory
{
    /** @var JuristischePersonDto  */
    private $dto;

    public function __construct(JuristischePersonDto $dto)
    {
        $this->dto = $dto;
    }

    public function create(): JuristischePersonTyp
    {
        $person = new JuristischePersonTyp();
        return $person
            ->withNameJuristischePerson($this->getNameJuristischePerson())
            ->withAdresseJuristischePerson($this->getAdresseJuristischePerson())
            ;
    }

    private function getNameJuristischePerson(): NameJuristischePersonTyp
    {
        $name = new NameJuristischePersonTyp();
        return $name
            ->withAnrede($this->getAnrede())
            ->withName($this->getName())
            ->withNamenszusatz($this->getNamenszusatz())
            ;
    }

    private function getAnrede(): AnredeTyp
    {
        $anrede = new AnredeTyp();
        return $anrede->withAnrede($this->dto->anrede);
    }

    private function getName(): string
    {
        $name = $this->dto->name;
        return Modify::trim(Modify::sanitizeString($name), NameJuristischePersonTyp::MAX_LENGTH_NAME);
    }

    private function getNamenszusatz(): ?string
    {
        $namenszusatz = $this->dto->namenszusatz;
        return Modify::trimOrNull($namenszusatz, NameJuristischePersonTyp::MAX_LENGTH_NAMENSZUSATZ);
    }

    private function getAdresseJuristischePerson(): ?AdresseJuristischePersonTyp
    {
        if ($this->dto->adresse === null) {
            return null;
        }
        $adresse = new AdresseJuristischePersonTyp();
        $adresse = $adresse->withPostleitzahl($this->getPostleitzahl())
            ->withOrt($this->getOrt())
            ;

        if ($this->dto->postfach) {
            return $adresse
                ->withPostfach(Modify::trim(
                    $this->dto->postfach,
                    AdresseJuristischePersonTyp::MAX_LENGTH_POSTFACH)
                )
                ->withLand($this->getLand())
                ;
        }

        return $adresse->withStrasse($this->getStrasse())
            ->withHausnummer($this->getHausnummer())
            ->withHausnummerZusatz($this->getHausnummerZusatz())
            ->withLand($this->getLand())
            ;
    }

    private function getPostleitzahl(): string
    {
        return $this->dto->adresse->postleitzahl;
    }

    private function getOrt(): string
    {
        $ort = $this->dto->adresse->ort;
        return Modify::trim(Modify::sanitizeString($ort), AdresseJuristischePersonTyp::MAX_LENGTH_ORT);
    }

    private function getLand(): string
    {
        return $this->dto->adresse->land;
    }

    private function getStrasse(): string
    {
        $strasse = $this->dto->adresse->strasse;
        return Modify::trim(Modify::sanitizeString($strasse), AdresseJuristischePersonTyp::MAX_LENGTH_STRASSE);
    }

    private function getHausnummer(): string
    {
        $hausnummer = $this->dto->adresse->hausnummer;
        return Modify::trim(Modify::sanitizeString($hausnummer), AdresseJuristischePersonTyp::MAX_LENGTH_HAUSNUMMER);
    }

    private function getHausnummerZusatz(): ?string
    {
        $hausnummerZusatz = $this->dto->adresse->hausnummerZusatz;
        return Modify::trimOrNull($hausnummerZusatz, AdresseJuristischePersonTyp::MAX_LENGTH_HAUSNUMMER_ZUSATZ);
    }


}