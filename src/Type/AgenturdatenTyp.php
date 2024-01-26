<?php

namespace PlusForta\RuVSoapBundle\Type;

class AgenturdatenTyp
{

    private ?AgenturTyp $Agentur;

    private ?MitarbeiterdatenTyp $Mitarbeiterdaten;

    /**
     * @param AgenturTyp $Agentur
     * @return AgenturdatenTyp
     */
    public function withAgentur(AgenturTyp $Agentur): self
    {
        $new = clone $this;
        $new->Agentur = $Agentur;

        return $new;
    }

    /**
     * @param MitarbeiterdatenTyp $Mitarbeiterdaten
     * @return AgenturdatenTyp
     */
    public function withMitarbeiterdaten(MitarbeiterdatenTyp $Mitarbeiterdaten): self
    {
        $new = clone $this;
        $new->Mitarbeiterdaten = $Mitarbeiterdaten;

        return $new;
    }


}

