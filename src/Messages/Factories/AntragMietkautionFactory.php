<?php


namespace PlusForta\RuVSoapBundle\Messages\Factories;


use PlusForta\RuVSoapBundle\Messages\Dtos\AntragMietkautionDto;
use PlusForta\RuVSoapBundle\Type\AdressdatenTyp;
use PlusForta\RuVSoapBundle\Type\AgenturdatenTyp;
use PlusForta\RuVSoapBundle\Type\AllgemeineAngabenTyp;
use PlusForta\RuVSoapBundle\Type\AntragMietkautionTyp;
use PlusForta\RuVSoapBundle\Type\AntragsdatenIdentifikationTyp;
use PlusForta\RuVSoapBundle\Type\AntragsdatenTyp;
use PlusForta\RuVSoapBundle\Type\InkassodatenTyp;
use PlusForta\RuVSoapBundle\Type\VertragsdatenTyp;
use PlusForta\RuVSoapBundle\Type\WerbewiderspruchTyp;

class AntragMietkautionFactory
{
    /**
     * @var AntragMietkautionDto
     */
    private $antragMietkautionDto;

    /**
     * @var bool
     */
    private $keineTelefonWerbung;

    /**
     * @var bool
     */
    private $keineEMailWerbung;

    /**
     * @var bool
     */
    private $keineDatenweitergabe;

    /**
     * @var bool
     */
    private $keineSchriftlicheWerbung;
    /**
     * @var AgenturdatenFactory
     */
    private $agenturdatenFactory;

    /**
     * @var VertragsdatenFactory
     */
    private $vertragsdatenFactory;

    public function __construct(
        AgenturdatenFactory $agenturdatenFactory,
        VertragsdatenFactory $vertragsdatenFactory,
        bool $keineTelefonWerbung,
        bool $keineEMailWerbung,
        bool $keineDatenweitergabe,
        bool $keineSchriftlicheWerbung
    )
    {
        $this->keineTelefonWerbung = $keineTelefonWerbung;
        $this->keineEMailWerbung = $keineEMailWerbung;
        $this->keineDatenweitergabe = $keineDatenweitergabe;
        $this->keineSchriftlicheWerbung = $keineSchriftlicheWerbung;
        $this->agenturdatenFactory = $agenturdatenFactory;
        $this->vertragsdatenFactory = $vertragsdatenFactory;
    }

    public function create(AntragMietkautionDto $antragMietkautionDto): AntragMietkautionTyp
    {
        $this->antragMietkautionDto = $antragMietkautionDto;
        $antragMietkaution = new AntragMietkautionTyp();
        return $antragMietkaution
            ->withReferenznummer($this->getReferenzNummer())
            ->withAllgemeineAngaben($this->getAllgemeineAngaben())
            ->withAntragsdaten($this->getAntragsdaten())
            ;
    }

    private function getReferenzNummer(): ?string
    {
        return $this->antragMietkautionDto->referenzNummer;
    }

    private function getAllgemeineAngaben(): AllgemeineAngabenTyp
    {
        $allgemeineAngaben = new AllgemeineAngabenTyp();
        return $allgemeineAngaben
            ->withAgenturdaten($this->getAgenturDaten())
            ->withInkassodaten($this->getInkassodaten())
            ->withWerbewiderspruch($this->getWerbewiderspruch())
            ;
    }

    private function getAgenturDaten(): AgenturdatenTyp
    {
        return $this->agenturdatenFactory->create($this->antragMietkautionDto->agenturdaten);

    }

    private function getInkassodaten(): InkassodatenTyp
    {
        $factory = new InkassodatenFactory($this->antragMietkautionDto->inkassodaten);
        return $factory->create();
    }



    private function getWerbewiderspruch(): WerbewiderspruchTyp
    {
        $widerspruch = new WerbewiderspruchTyp();
        return $widerspruch
            ->withKeineTelefonWerbung($this->getKeineTelefonwerbung())
            ->withKeineEMailWerbung($this->getKeineEMailWerbung())
            ->withKeineDatenweitergabe($this->getKeineDatenweitergabe())
            ->withKeineSchriftlicheWerbung($this->getKeineSchriftlicheWerbung())
            ;
    }

    private function getKeineTelefonwerbung(): bool
    {
        return $this->antragMietkautionDto->werbewiederspruch->keineTelefonwerbung ?? $this->keineTelefonWerbung;
    }

    private function getKeineEMailWerbung(): bool
    {
        return $this->antragMietkautionDto->werbewiederspruch->keineEMailWerbung ?? $this->keineEMailWerbung;
    }

    private function getKeineDatenweitergabe(): bool
    {
        return $this->antragMietkautionDto->werbewiederspruch->keineDatenweitergab ?? $this->keineDatenweitergabe;
    }

    private function getKeineSchriftlicheWerbung(): bool
    {
        return $this->antragMietkautionDto->werbewiederspruch->keineSchriftlicheWerbung ?? $this->keineSchriftlicheWerbung;
    }

    private function getAntragsdaten(): AntragsdatenTyp
    {
        $antragsdaten = new AntragsdatenTyp();
        return $antragsdaten
            ->withAdressdaten($this->getAdressdaten())
            ->withVertragsdaten($this->getVertragsdaten())
            ->withAntragsdatenIdentifikation($this->getAntragsdatenIdentifikation())
            ;
    }

    private function getAdressdaten(): AdressdatenTyp
    {
        $factory = new AdressdatenFactory($this->antragMietkautionDto->adressdaten);
        return $factory->create();
    }

    private function getVertragsdaten(): VertragsdatenTyp
    {
        return $this->vertragsdatenFactory->create($this->antragMietkautionDto->vertragsDaten);
    }

    private function getAntragsdatenIdentifikation(): ?AntragsdatenIdentifikationTyp
    {
        $antragsdatenIdentifikationsDto = $this->antragMietkautionDto->antragsdatenIdentifikationsDto;
        if ($antragsdatenIdentifikationsDto === null) {
            return null;
        }
        $identifikation = new AntragsdatenIdentifikationTyp();
        return $identifikation
            ->withAntragsdatenID($antragsdatenIdentifikationsDto->antragsdatenId)
            ->withBuergschaftstextVersion($antragsdatenIdentifikationsDto->buergschaftstextVersion)
            ;
    }


}