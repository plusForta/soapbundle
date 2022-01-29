<?php


namespace PlusForta\RuVSoapBundle\Messages\Dtos;


class GibVertragsdatenDto
{

    /** @var KennungDto */
    public $kennungDto;

    /** @var string */
    public $vorgangsnummer;

    /** @var int */
    public $arbeitesgebiet;

    /** @var string */
    public $versicherungsnummer;
}