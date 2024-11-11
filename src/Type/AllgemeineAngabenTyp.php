<?php

namespace PlusForta\RuVSoapBundle\Type;

class AllgemeineAngabenTyp
{
    /**
     * @var AgenturdatenTyp
     */
    private $Agenturdaten;

    /**
     * @var InkassodatenTyp
     */
    private $Inkassodaten;

    /**
     * @var WerbewiderspruchTyp
     */
    private $Werbewiderspruch;

    /**
     * @param AgenturdatenTyp $Agenturdaten
     * @return AllgemeineAngabenTyp
     */
    public function withAgenturdaten(AgenturdatenTyp $Agenturdaten): AllgemeineAngabenTyp
    {
        $new = clone $this;
        $new->Agenturdaten = $Agenturdaten;

        return $new;
    }

    /**
     * @param InkassodatenTyp $Inkassodaten
     * @return AllgemeineAngabenTyp
     */
    public function withInkassodaten(InkassodatenTyp $Inkassodaten): AllgemeineAngabenTyp
    {
        $new = clone $this;
        $new->Inkassodaten = $Inkassodaten;

        return $new;
    }

    /**
     * @param WerbewiderspruchTyp $Werbewiderspruch
     * @return AllgemeineAngabenTyp
     */
    public function withWerbewiderspruch(WerbewiderspruchTyp $Werbewiderspruch): AllgemeineAngabenTyp
    {
        $new = clone $this;
        $new->Werbewiderspruch = $Werbewiderspruch;

        return $new;
    }
}
