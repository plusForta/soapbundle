<?php


namespace PlusForta\RuVSoapBundle\Type;


use PlusForta\RuVSoapBundle\Messages\ResponseStatusInterface;

class GibAntragsstatusAntwortTyp implements ResponseStatusInterface
{


    /** @var StatusTyp */
    private $Status;

    /** @var AntraegeTyp */
    private $Antraege;

    public function getStatus(): StatusTyp
    {
        return $this->Status;
    }


    public function withStatus(StatusTyp $Status): GibAntragsstatusAntwortTyp
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }


    public function getAntraege(): AntraegeTyp
    {
        return $this->Antraege;
    }

    /**
     * @param AntraegeTyp $Antraege
     * @return GibAntragsstatusAntwortTyp
     */
    public function withAntraege($Antraege): GibAntragsstatusAntwortTyp
    {
        $new = clone $this;
        $new->Antraege = $Antraege;

        return $new;
    }
}