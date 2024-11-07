<?php

namespace PlusForta\RuVSoapBundle\Type;

class AgenturdatenTyp
{
    private ?AgenturTyp $Agentur;

    private ?MitarbeiterdatenTyp $Mitarbeiterdaten;

    public function withAgentur(AgenturTyp $Agentur): self
    {
        $new = clone $this;
        $new->Agentur = $Agentur;

        return $new;
    }

    public function withMitarbeiterdaten(MitarbeiterdatenTyp $Mitarbeiterdaten): self
    {
        $new = clone $this;
        $new->Mitarbeiterdaten = $Mitarbeiterdaten;

        return $new;
    }
}
