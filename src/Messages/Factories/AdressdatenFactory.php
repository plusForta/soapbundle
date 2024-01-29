<?php


namespace PlusForta\RuVSoapBundle\Messages\Factories;


use PlusForta\RuVSoapBundle\Messages\Dtos\AdressdatenDto;
use PlusForta\RuVSoapBundle\Messages\Dtos\GemeinschaftDto;
use PlusForta\RuVSoapBundle\Messages\Dtos\NatuerlichePersonDto;
use PlusForta\RuVSoapBundle\Type\AbweichBuergEmpfaengerTyp;
use PlusForta\RuVSoapBundle\Type\AdressdatenTyp;
use PlusForta\RuVSoapBundle\Type\GemeinschaftTyp;
use PlusForta\RuVSoapBundle\Type\MietobjektTyp;
use PlusForta\RuVSoapBundle\Type\NatuerlichePersonTyp;
use PlusForta\RuVSoapBundle\Type\VermieterTyp;
use PlusForta\RuVSoapBundle\Type\VersicherungsnehmerTyp;

class AdressdatenFactory
{

    /**
     * @var AdressdatenDto
     */
    private $adressdatenDto;

    public function __construct(AdressdatenDto $adressdatenDto)
    {
        $this->adressdatenDto = $adressdatenDto;
    }

    public function create(): AdressdatenTyp
    {
        $adressdaten = new AdressdatenTyp();
        if ($this->adressdatenDto->empfaenger) {
            $adressdaten = $adressdaten->withAbweichBuergEmpfaenger($this->getAbweichBuergEmpfaenger());
        }

        return $adressdaten
            ->withVersicherungsnehmer($this->getVersicherungsnehmer())
            ->withVermieter($this->getVermieter())
            ->withMietobjekt($this->getMietobjekt());
    }

    private function getAbweichBuergEmpfaenger(): AbweichBuergEmpfaengerTyp
    {
        $empfaenger = new AbweichBuergEmpfaengerTyp();

        if ($this->adressdatenDto->empfaenger instanceof NatuerlichePersonDto) {
            $factory = new NatuerlichePersonFactory($this->adressdatenDto->empfaenger);
            return $empfaenger->withNatuerlichePerson($factory->create());
        }

        $factory = new JuristischePersonFactory($this->adressdatenDto->empfaenger);
        return $empfaenger->withJuristischePerson($factory->create());
    }

    private function getVersicherungsnehmer(): VersicherungsnehmerTyp
    {
        $versicherungsnehmer = new VersicherungsnehmerTyp();
        if ($this->adressdatenDto->versicherungsnehmer instanceof NatuerlichePersonDto) {
            $factory = new NatuerlichePersonFactory($this->adressdatenDto->versicherungsnehmer);
            return $versicherungsnehmer->withNatuerlichePerson($factory->createErweitert());
        }

        if ($this->adressdatenDto->versicherungsnehmer instanceof GemeinschaftDto) {
                $factory = new GemeinschaftFactory($this->adressdatenDto->versicherungsnehmer);
                return $versicherungsnehmer->withGemeinschaft($factory->create());
        }

        throw new \RuntimeException('Versicherungsnehmer muss gesetzt sein');
    }

    private function getVermieter(): VermieterTyp
    {
        $vermieter = new VermieterTyp();
        if ($this->adressdatenDto->vermieter instanceof NatuerlichePersonDto) {
            $factory = new NatuerlichePersonFactory($this->adressdatenDto->vermieter);
            return $vermieter->withNatuerlichePerson($factory->createAdresseOptional());
        }

        $factory = new JuristischePersonFactory($this->adressdatenDto->vermieter);
        return $vermieter->withJuristischePerson($factory->create());
    }

    private function getMietobjekt(): MietobjektTyp
    {
        $factory = new MietobjectFactory($this->adressdatenDto->mietobject);
        return $factory->create();
    }

}