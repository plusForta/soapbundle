<?php


namespace PlusForta\RuVSoapBundle\Type;


class AntraegeTyp
{
    private ?AntragTyp $Antrag;

    public function getAntrag(): AntragTyp
    {
        return $this->Antrag;
    }

    public function withAntrag(AntragTyp $Antrag): AntraegeTyp
    {
        $new = clone $this;
        $new->Antrag = $Antrag;

        return $new;
    }
}