<?php


namespace PlusForta\RuVSoapBundle\Type;

class AntraegeTyp
{
    /**
     * @var AntragTyp
     */
    private $Antrag;

    public function getAntrag(): AntragTyp
    {
        return $this->Antrag;
    }

    /**
     * @param AntragTyp $Antrag
     */
    public function withAntrag(AntragTyp $Antrag): AntraegeTyp
    {
        $new = clone $this;
        $new->Antrag = $Antrag;

        return $new;
    }
}
