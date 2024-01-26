<?php

namespace PlusForta\RuVSoapBundle\Type;

class StatusTyp
{
    private string $Code;
    private string $Nachricht;

    public function getCode(): string
    {
        return $this->Code;
    }

    public function withCode(CodeEnumTyp $Code): self
    {
        $new = clone $this;
        $new->Code = $Code->toString();

        return $new;
    }

    public function getNachricht(): string
    {
        return $this->Nachricht;
    }

    public function withNachricht(string $Nachricht): self
    {
        $new = clone $this;
        $new->Nachricht = $Nachricht;

        return $new;
    }
}

