<?php

namespace PlusForta\RuVSoapBundle\Type;

/**
 * @property string Namenszusatz
 */
class NameJuristischePersonTyp
{

    /**
     * @var string
     */
    private $Anrede;

    /**
     * @var string
     */
    private $Name;

    /**
     * @param AnredeTyp $Anrede
     * @return NameJuristischePersonTyp
     */
    public function withAnrede(AnredeTyp $Anrede): NameJuristischePersonTyp
    {
        $new = clone $this;
        $new->Anrede = $Anrede->toString();

        return $new;
    }

    /**
     * @param string $Name
     * @return NameJuristischePersonTyp
     */
    public function withName(string $Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @param ?string $Namenszusatz
     * @return NameJuristischePersonTyp
     */
    public function withNamenszusatz(?string $Namenszusatz): NameJuristischePersonTyp
    {
        $new = clone $this;
        if ($Namenszusatz !== null) {
            $new->Namenszusatz = $Namenszusatz;
        }

        return $new;
    }


}

