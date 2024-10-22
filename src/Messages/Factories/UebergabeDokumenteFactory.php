<?php


namespace PlusForta\RuVSoapBundle\Messages\Factories;

use PlusForta\RuVSoapBundle\Messages\Dtos\UebergabeDokumenteDto;
use PlusForta\RuVSoapBundle\Type\UebergabeDokumenteTyp;

class UebergabeDokumenteFactory
{
    /**
     * @var UebergabeDokumenteDto
     */
    private $dokumenteDto;

    /**
     * @var bool
     */
    private $vertragsbestimmungenUebergeben;

    /**
     * @var bool
     */
    private $buergschaftUebergeben;

    /**
     * @var bool
     */
    private $versicherungsscheinUebergeben;

    /**
     * @var bool
     */
    private $rechnungUebergeben;

    public function __construct(
        bool $vertragsbestimmungenUebergeben,
        bool $buergschaftUebergeben,
        bool $versicherungsscheinUebergeben,
        bool $rechnungUebergeben
    ) {
        $this->vertragsbestimmungenUebergeben = $vertragsbestimmungenUebergeben;
        $this->buergschaftUebergeben = $buergschaftUebergeben;
        $this->versicherungsscheinUebergeben = $versicherungsscheinUebergeben;
        $this->rechnungUebergeben = $rechnungUebergeben;
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
