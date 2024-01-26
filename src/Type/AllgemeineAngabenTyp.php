<?php

namespace PlusForta\RuVSoapBundle\Type;

class AllgemeineAngabenTyp
{

    private ?AgenturdatenTyp $Agenturdaten;

    private ?InkassodatenTyp $Inkassodaten;

    private ?WerbewiderspruchTyp $Werbewiderspruch;

    public function withAgenturdaten(AgenturdatenTyp $Agenturdaten): self
    {
        $new = clone $this;
        $new->Agenturdaten = $Agenturdaten;

        return $new;
    }

    public function withInkassodaten(InkassodatenTyp $Inkassodaten): self
    {
        $new = clone $this;
        $new->Inkassodaten = $Inkassodaten;

        return $new;
    }

    public function withWerbewiderspruch(WerbewiderspruchTyp $Werbewiderspruch): self
    {
        $new = clone $this;
        $new->Werbewiderspruch = $Werbewiderspruch;

        return $new;
    }
}

