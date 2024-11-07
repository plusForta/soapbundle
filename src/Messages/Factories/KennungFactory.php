<?php


namespace PlusForta\RuVSoapBundle\Messages\Factories;

use PlusForta\RuVSoapBundle\Messages\Dtos\KennungDto;
use PlusForta\RuVSoapBundle\Type\BasisAnfrageTyp;

class KennungFactory
{
    /**
     * @var KennungDto
     */
    private $kennungDto;

    /**
     * @var string
     */
    private $benutzer;

    /**
     * @var string
     */
    private $passwort;


    public function __construct(string $benutzer, string $passwort)
    {
        $this->benutzer = $benutzer;
        $this->passwort = $passwort;
    }

    public function create(?KennungDto $kennungDto): BasisAnfrageTyp
    {
        $this->kennungDto = $kennungDto ?? new KennungDto();
        $anfrage = new BasisAnfrageTyp();
        return $anfrage->withBenutzer($this->getBenutzer())
            ->withPasswort($this->getPasswort());
    }

    /**
     * @return string
     */
    private function getBenutzer(): string
    {
        $benutzer = $this->kennungDto->benutzer ?? $this->benutzer;
        return $benutzer;
    }

    /**
     * @return string
     */
    private function getPasswort(): string
    {
        return $this->kennungDto->passwort ?? $this->passwort;
    }
}
