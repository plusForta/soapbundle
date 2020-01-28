<?php


namespace PlusForta\RuVSoapBundle\Messages\Dtos;


class ZahlungseinzugDto
{

    /** @var BankverbindungDto|null */
    public $bankverbindung;

    /** @var ZahlungsdienstleisterDto|null */
    public $zahlungsdienstleister;

}