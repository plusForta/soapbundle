<?php


namespace PlusForta\RuVSoapBundle\Messages\Dtos;


class InkassodatenDto
{

    /** @var string */
    public $zahlungsweise;

    /** @var string */
    public $inkassoart;

    /** @var ZahlungseinzugDto */
    public $zahlungseinzug;
}