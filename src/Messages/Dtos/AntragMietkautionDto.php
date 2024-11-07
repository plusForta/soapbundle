<?php


namespace PlusForta\RuVSoapBundle\Messages\Dtos;

class AntragMietkautionDto
{
    /** @var string */
    public $referenzNummer;

    /** @var VertragsdatenDto */
    public $vertragsDaten;

    /** @var AgenturdatenDto */
    public $agenturdaten;

    /** @var InkassodatenDto */
    public $inkassodaten;

    /** @var AdressdatenDto */
    public $adressdaten;

    /** @var WerbewiderspruchDto */
    public $werbewiederspruch;

    /** @var AntragsdatenIdentifikationsDto|null */
    public $antragsdatenIdentifikationsDto;
}
