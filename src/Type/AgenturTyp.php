<?php

namespace PlusForta\RuVSoapBundle\Type;

class AgenturTyp
{

    /**
     * @var string
     */
    private $Agenturnummer;

    /**
     * @param string $Agenturnummer
     * @return AgenturTyp
     */
    public function withAgenturnummer(string $Agenturnummer): AgenturTyp
    {
        $new = clone $this;
        $new->Agenturnummer = $Agenturnummer;

        return $new;
    }


}

