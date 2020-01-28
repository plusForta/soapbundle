<?php

namespace PlusForta\RuVSoapBundle\Type;

class StatusTyp
{

    /**
     * @var string
     */
    private $Code;

    /**
     * @var string
     */
    private $Nachricht;

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->Code;
    }

    /**
     * @param CodeEnumTyp $Code
     * @return StatusTyp
     */
    public function withCode(CodeEnumTyp $Code): StatusTyp
    {
        $new = clone $this;
        $new->Code = $Code->toString();

        return $new;
    }

    /**
     * @return string
     */
    public function getNachricht(): string
    {
        return $this->Nachricht;
    }

    /**
     * @param string $Nachricht
     * @return StatusTyp
     */
    public function withNachricht(string $Nachricht): StatusTyp
    {
        $new = clone $this;
        $new->Nachricht = $Nachricht;

        return $new;
    }


}

