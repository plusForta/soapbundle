<?php


namespace PlusForta\RuVSoapBundle\Messages\Dtos;


class AdresseDto
{

    /** @var string */
    public $strasse;

    /** @var string */
    public $hausnummer;

    /** @var ?string */
    public $hausnummerZusatz;

    /** @var string */
    public $postleitzahl;

    /** @var string */
    public $ort;

    /** @var ?string */
    public $teilort;

    /** @var string */
    public $land;


}