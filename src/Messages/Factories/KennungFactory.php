<?php


namespace PlusForta\RuVSoapBundle\Messages\Factories;


use PlusForta\RuVSoapBundle\Messages\Dtos\KennungDto;
use PlusForta\RuVSoapBundle\Type\BasisAnfrageTyp;

class KennungFactory
{
    private KennungDto $kennungDto;

    public function __construct(private readonly string $benutzer, private readonly string $passwort)
    {
    }

    public function create(?KennungDto $kennungDto): BasisAnfrageTyp
    {
        $this->kennungDto = $kennungDto ?? new KennungDto();
        $anfrage = new BasisAnfrageTyp();

        return $anfrage->withBenutzer($this->getBenutzer())
            ->withPasswort($this->getPasswort());
    }

    private function getBenutzer(): string
    {
        return $this->kennungDto->benutzer ?? $this->benutzer;
    }

    private function getPasswort(): string
    {
        return $this->kennungDto->passwort ?? $this->passwort;
    }
}