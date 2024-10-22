<?php


namespace PlusForta\RuVSoapBundle\Messages\Dtos;

class PruefeBonitaetDto
{
    /** @var KennungDto */
    public $kennungDto;

    /** @var string */
    public $referenznummer;

    /** @var string */
    public $anrede;

    /** @var string */
    public $titel;

    /** @var string */
    public $vorname;

    /** @var string */
    public $nachname;

    /** @var string */
    public $strasse;

    /** @var string */
    public $Hausnummer;

    /** @var string */
    public $plz;

    /** @var string */
    public $ort;

    /** @var string */
    public $land;

    /** @var \DateTimeImmutable */
    public $geburtsdatum;
}
