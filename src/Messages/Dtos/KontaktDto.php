<?php


namespace PlusForta\RuVSoapBundle\Messages\Dtos;

class KontaktDto
{
    /** @var bool */
    public $isPrivate;

    /** @var NumberDto */
    public $telefon;

    /** @var NumberDto */
    public $mobile;

    /** @var NumberDto */
    public $fax;

    /** @var string */
    public $email;
}
