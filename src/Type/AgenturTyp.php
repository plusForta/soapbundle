<?php

namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

class AgenturTyp
{
    public const MAX_LENGTH_AGENTURNUMMER = 6;

    private ?string $Agenturnummer;

    public function withAgenturnummer(string $Agenturnummer): self
    {
        Assert::length($Agenturnummer, self::MAX_LENGTH_AGENTURNUMMER);
        $new = clone $this;
        $new->Agenturnummer = $Agenturnummer;

        return $new;
    }
}
