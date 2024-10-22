<?php


namespace PlusForta\RuVSoapBundle\Messages\Dtos;

class BankverbindungDto
{
    /** @var string */
    public $kontoinhaber;

    /** @var string */
    public $kreditinstitut;

    /** @var int */
    public $bankleitzahl;

    /** @var int */
    public $kontonummer;

    /** @var string */
    public $iban;

    /** @var ?string */
    public $bic;
}
