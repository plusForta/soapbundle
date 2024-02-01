<?php

namespace PlusForta\RuVSoapBundle\Type;

use PlusForta\RuVSoapBundle\Messages\ResponseStatusInterface;

class GibVertragsdatenAntwortTyp implements ResponseStatusInterface
{
    private StatusTyp $Status;
    private VertragTyp $Vertrag;

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

    public function getVertrag(): VertragTyp
    {
        return $this->Vertrag;
    }

    public function withVertrag(VertragTyp $Vertrag): self
    {
        $new = clone $this;
        $new->Vertrag = $Vertrag;

        return $new;
    }
}