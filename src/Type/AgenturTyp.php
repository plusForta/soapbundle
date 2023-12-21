<?php

namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

class AgenturTyp
{
    const MAX_LENGTH_AGENTURNUMMER = 6;

    private ?string $Agenturnummer;

    /**
     * @param string $Agenturnummer
     * @return AgenturTyp
     */
    public function withAgenturnummer(string $Agenturnummer): AgenturTyp
    {
        Assert::length($Agenturnummer, self::MAX_LENGTH_AGENTURNUMMER);
        $new = clone $this;
        $new->Agenturnummer = $Agenturnummer;

        return $new;
    }
}

