<?php


namespace PlusForta\RuVSoapBundle\Messages;


use PlusForta\RuVSoapBundle\Type\StatusTyp;

interface ResponseStatusInterface
{

    public function getStatus(): StatusTyp;

}