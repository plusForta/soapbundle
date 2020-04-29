<?php

namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

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
        Assert::length($Agenturnummer, 5);
        $new = clone $this;
        $new->Agenturnummer = $Agenturnummer;

        return $new;
    }


}

