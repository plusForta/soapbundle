<?php


namespace PlusForta\RuVSoapBundle\Type;


use PlusForta\RuVSoapBundle\Messages\ResponseStatusInterface;

class GibAntragsstatusAntwortTyp implements ResponseStatusInterface
{
    private StatusTyp $Status;
    private AntraegeTyp $Antraege;

    public function getStatus(): StatusTyp
    {
        return $this->Status;
    }

    public function withStatus(StatusTyp $Status): self
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    public function getAntraege(): AntraegeTyp
    {
        return $this->Antraege;
    }

    public function withAntraege(AntraegeTyp $Antraege): self
    {
        $new = clone $this;
        $new->Antraege = $Antraege;

        return $new;
    }
}