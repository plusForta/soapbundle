<?php


namespace PlusForta\RuVSoapBundle\Messages\Factories;

use PlusForta\RuVSoapBundle\Messages\Dtos\AgenturdatenDto;
use PlusForta\RuVSoapBundle\Type\AgenturdatenTyp;
use PlusForta\RuVSoapBundle\Type\AgenturTyp;
use PlusForta\RuVSoapBundle\Type\MitarbeiterdatenTyp;
use PlusForta\RuVSoapBundle\Utils\Modify;

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
    ) {
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
        return $this->agenturdatenDto->agenturNummer ?? $this->agenturNummer;
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
        $mitarbeiternummer = $this->agenturdatenDto->mitarbeiternummer ?? $this->mitarbeiternummer;
        return Modify::trimOrNull($mitarbeiternummer, MitarbeiterdatenTyp::MAX_LENGTH_MITARBEITERNUMMER);
    }

    private function getMitarbeiternummerZusaetzlicherMA(): ?string
    {
        $mitarbtiernummerZusaetzlicherMA = $this->agenturdatenDto->mitarbeiternummerZusaetzlicherMA ?? $this->mitarbeiternummerZusaetzlicherMA;
        return Modify::trimOrNull($mitarbtiernummerZusaetzlicherMA, MitarbeiterdatenTyp::MAX_LENGTH_MITARBEITER_ZUSAETZLICHER_MA);
    }

    private function getStellennummerZusaetzlicherMA(): ?string
    {
        $stellennummerZusaetzlicherMA = $this->agenturdatenDto->stellennummerZusaetzlicherMA ?? $this->stellennummerZusaetzlicherMA;
        return Modify::trimOrNull($stellennummerZusaetzlicherMA, MitarbeiterdatenTyp::MAX_LENGTH_STELLENNUMMER_ZUSAETZLICHER_MA);
    }

    private function getVermittlereigeneVorgangsnummer(): ?string
    {
        $vermittlereigeneVorgangsnummer = $this->agenturdatenDto->vermittlereigeneVorgangsnummer;
        return Modify::trimOrNull($vermittlereigeneVorgangsnummer, MitarbeiterdatenTyp::MAX_LENGTH_VERMITTLEREIGENE_VORGANGSNUMMER);
    }
}
