<?php


namespace PlusForta\RuVSoapBundle\Messages\Factories;


use PlusForta\RuVSoapBundle\Type\UebergabeDokumenteTyp;
use PlusForta\RuVSoapBundle\Messages\Dtos\UebergabeDokumenteDto;
    
class UebergabeDokumenteFactory
{
    private UebergabeDokumenteDto $dokumenteDto;

    public function __construct(
        private readonly bool $vertragsbestimmungenUebergeben,
        private readonly bool $buergschaftUebergeben,
        private readonly bool $versicherungsscheinUebergeben,
        private readonly bool $rechnungUebergeben
    )
    {
    }

    public function create(UebergabeDokumenteDto $dokumenteDto): UebergabeDokumenteTyp
    {
        $dokumente = new UebergabeDokumenteTyp();
        $this->dokumenteDto = $dokumenteDto;

        return $dokumente
            ->withVertragsbestimmungenUebergeben($this->getVertragsbestimmungenUebergeben())
            ->withBuergschaftUebergeben($this->getBuergschaftUebergeben())
            ->withVersicherungsscheinUebergeben($this->getVersicherungsscheinUebergeben())
            ->withRechnungUebergeben($this->getRechnungUebergeben())
            ;
    }

    private function getVertragsbestimmungenUebergeben(): bool
    {
        return $this->dokumenteDto->vertragsbestimmungenUebergeben ?? $this->vertragsbestimmungenUebergeben;
    }

    private function getBuergschaftUebergeben(): bool
    {
        return $this->dokumenteDto->buergschaftUebergeben ?? $this->buergschaftUebergeben;
    }

    private function getVersicherungsscheinUebergeben(): bool
    {
        return $this->dokumenteDto->versicherungsscheinUebergeben ?? $this->versicherungsscheinUebergeben;
    }

    private function getRechnungUebergeben(): bool
    {
        return $this->dokumenteDto->rechnungUebergeben ?? $this->rechnungUebergeben;
    }
}