<?php


namespace PlusForta\RuVSoapBundle\Messages\Dtos;



class VertragsdatenDto
{

    /** @var string */
    public $product;

    /** @var \DateTimeImmutable */
    public $vertragsbeginn;

    /** @var ?string  */
    public $Buergschaftsvariante = null;

    /** @var string */
    public $versicherungsBedingungen;

    /** @var float */
    public $buergschaftssumme;

    /** @var float */
    public $jahresBeitrag;

    /** @var \DateTimeImmutable */
    public $mietvertragVom;

    /** @var \DateTimeImmutable */
    public $einzugsDatum;

    /** @var string*/
    public $versandBuergschaft;

    /** @var UebergabeDokumenteDto */
    public $uebergabeDokumente;

}