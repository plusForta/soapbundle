<?php

namespace PlusForta\RuVSoapBundle\Type;

class AgenturdatenTyp
{
    /**
     * @var AgenturTyp
     */
    private $Agentur;

    /**
     * @var MitarbeiterdatenTyp
     */
    private $Mitarbeiterdaten;

    /**
     * @param AgenturTyp $Agentur
     * @return AgenturdatenTyp
     */
    public function withAgentur(AgenturTyp $Agentur): AgenturdatenTyp
    {
        $new = clone $this;
        $new->Agentur = $Agentur;

        return $new;
    }

    /**
     * @param MitarbeiterdatenTyp $Mitarbeiterdaten
     * @return AgenturdatenTyp
     */
    public function withMitarbeiterdaten(MitarbeiterdatenTyp $Mitarbeiterdaten): AgenturdatenTyp
    {
        $new = clone $this;
        $new->Mitarbeiterdaten = $Mitarbeiterdaten;

        return $new;
    }
}
