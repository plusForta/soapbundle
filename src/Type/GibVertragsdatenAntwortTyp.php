<?php

namespace PlusForta\RuVSoapBundle\Type;

use PlusForta\RuVSoapBundle\Messages\ResponseStatusInterface;

class GibVertragsdatenAntwortTyp implements ResponseStatusInterface
{
    /**
     * @var \PlusForta\RuVSoapBundle\Type\StatusTyp
     */
    private $Status;

    /**
     * @var \PlusForta\RuVSoapBundle\Type\VertragTyp
     */
    private $Vertrag;

    /**
     * @return \PlusForta\RuVSoapBundle\Type\StatusTyp
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param \PlusForta\RuVSoapBundle\Type\StatusTyp $Status
     * @return GibVertragsdatenAntwortTyp
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \PlusForta\RuVSoapBundle\Type\VertragTyp
     */
    public function getVertrag()
    {
        return $this->Vertrag;
    }

    /**
     * @param \PlusForta\RuVSoapBundle\Type\VertragTyp $Vertrag
     * @return GibVertragsdatenAntwortTyp
     */
    public function withVertrag($Vertrag)
    {
        $new = clone $this;
        $new->Vertrag = $Vertrag;

        return $new;
    }
}

