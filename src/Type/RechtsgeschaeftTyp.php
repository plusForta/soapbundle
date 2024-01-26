<?php

namespace PlusForta\RuVSoapBundle\Type;

class RechtsgeschaeftTyp
{
    private int $Arbeitsgebiet;
    private int $Versicherungsnummer;

    public function getArbeitsgebiet(): int
    {
        return $this->Arbeitsgebiet;
    }

    public function withArbeitsgebiet(int $Arbeitsgebiet): RechtsgeschaeftTyp
    {
        $new = clone $this;
        $new->Arbeitsgebiet = $Arbeitsgebiet;

        return $new;
    }

    public function getVersicherungsnummer(): int
    {
        return $this->Versicherungsnummer;
    }

    public function withVersicherungsnummer(int $Versicherungsnummer): RechtsgeschaeftTyp
    {
        $new = clone $this;
        $new->Versicherungsnummer = $Versicherungsnummer;

        return $new;
    }
}

