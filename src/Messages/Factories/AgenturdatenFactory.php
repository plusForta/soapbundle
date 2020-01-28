<?php


namespace PlusForta\RuVSoapBundle\Messages\Factories;


use PlusForta\RuVSoapBundle\Messages\Dtos\AgenturdatenDto;
use PlusForta\RuVSoapBundle\Type\AgenturdatenTyp;
use PlusForta\RuVSoapBundle\Type\AgenturTyp;
use PlusForta\RuVSoapBundle\Type\MitarbeiterdatenTyp;

class AgenturdatenFactory
{
    /**
     * @var AgenturdatenDto
     */
    private $agenturdatenDto;

    /**
     * @var string
     */
    private $agenturNummer;
    /**
     * @var string
     */
    private $mitarbeiternummer;
    /**
     * @var string
     */
    private $mitarbeiternummerZusaetzlicherMA;
    /**
     * @var string
     */
    private $stellennummerZusaetzlicherMA;

    public function __construct(
        string $agenturNummer,
        $mitarbeiternummer,
        $mitarbeiternummerZusaetzlicherMA,
        $stellennummerZusaetzlicherMA
    )
    {

        $this->agenturNummer = $agenturNummer;
        $this->mitarbeiternummer = $mitarbeiternummer;
        $this->mitarbeiternummerZusaetzlicherMA = $mitarbeiternummerZusaetzlicherMA;
        $this->stellennummerZusaetzlicherMA = $stellennummerZusaetzlicherMA;
    }

    public function create(AgenturdatenDto $agenturdatenDto): AgenturdatenTyp
    {
        $this->agenturdatenDto = $agenturdatenDto;
        $agenturDaten = new AgenturdatenTyp();
        return $agenturDaten
            ->withAgentur($this->getAgentur())
            ->withMitarbeiterdaten($this->getMitarbeiterdaten())
            ;
    }

    /**
     * @return AgenturTyp
     */
    private function getAgentur(): AgenturTyp
    {
        $agentur = new AgenturTyp();
        return $agentur->withAgenturnummer($this->getAgenturNummer());
    }

    /**
     * @return string
     */
    private function getAgenturNummer(): string
    {
        return $this->agenturNummer ?? $this->agenturdatenDto->agenturNummer;
    }

    private function getMitarbeiterdaten(): MitarbeiterdatenTyp
    {
        $mitarbeiter = new MitarbeiterdatenTyp();
        return $mitarbeiter
            ->withMitarbeiternummer($this->getMitarbeiternummer())
            ->withMitarbeiternummerZusaetzlicherMA($this->getMitarbeiternummerZusaetzlicherMA())
            ->withStellennummerZusaetzlicherMA($this->getStellennummerZusaetzlicherMA())
            ->withVermittlereigeneVorgangsnummer($this->getVermittlereigeneVorgangsnummer())
            ;
    }

    /**
     * @return string
     */
    private function getMitarbeiternummer(): ?string
    {
        return $this->agenturdatenDto->mitarbeiternummer ?? $this->mitarbeiternummer;
    }

    private function getMitarbeiternummerZusaetzlicherMA(): ?string
    {
        return $this->agenturdatenDto->mitarbeiternummerZusaetzlicherMA ?? $this->mitarbeiternummerZusaetzlicherMA;
    }

    private function getStellennummerZusaetzlicherMA(): ?string
    {
        return $this->agenturdatenDto->stellennummerZusaetzlicherMA ?? $this->stellennummerZusaetzlicherMA;
    }

    private function getVermittlereigeneVorgangsnummer(): ?string
    {
        return $this->agenturdatenDto->vermittlereigeneVorgangsnummer;
    }



}