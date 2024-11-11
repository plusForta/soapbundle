<?php

namespace PlusForta\RuVSoapBundle\Type;

class NameTyp
{
    /**
     * @var string
     */
    private $Name;

    /**
     * @var string
     */
    private $Namenszusatz;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return NameTyp
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return string
     */
    public function getNamenszusatz()
    {
        return $this->Namenszusatz;
    }

    /**
     * @param string $Namenszusatz
     * @return NameTyp
     */
    public function withNamenszusatz($Namenszusatz)
    {
        $new = clone $this;
        $new->Namenszusatz = $Namenszusatz;

        return $new;
    }
}
