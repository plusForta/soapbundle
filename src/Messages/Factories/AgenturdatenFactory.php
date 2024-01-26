<?php


namespace PlusForta\RuVSoapBundle\Messages\Factories;


use PlusForta\RuVSoapBundle\Messages\Dtos\AgenturdatenDto;
use PlusForta\RuVSoapBundle\Type\AgenturdatenTyp;
use PlusForta\RuVSoapBundle\Type\AgenturTyp;
use PlusForta\RuVSoapBundle\Type\MitarbeiterdatenTyp;
use PlusForta\RuVSoapBundle\Utils\Modify;

class AgenturdatenFactory
{
    private AgenturdatenDto $agenturdatenDto;

    public function __construct(
        private readonly string $agenturNummer,
        private string $mitarbeiternummer,
        private string $mitarbeiternummerZusaetzlicherMA,
        private string $stellennummerZusaetzlicherMA
    )
    {
    }

    public function create(AgenturdatenDto $agenturdatenDto): AgenturdatenTyp
    {
        $this->agenturdatenDto = $agenturdatenDto;
        $agenturDaten = new AgenturdatenTyp();
        return $agenturDaten
            ->withAgentur($this->getAgentur())
            ->withMitarbeiterdaten($this->getMitarbeiterdaten());
    }

    private function getAgentur(): AgenturTyp
    {
        $agentur = new AgenturTyp();
        return $agentur->withAgenturnummer($this->getAgenturNummer());
    }

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
            ->withVermittlereigeneVorgangsnummer($this->getVermittlereigeneVorgangsnummer());
    }

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