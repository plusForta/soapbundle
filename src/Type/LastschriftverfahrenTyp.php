<?php

namespace PlusForta\RuVSoapBundle\Type;

class LastschriftverfahrenTyp
{
    private int $Kontonummer;
    private int $Bankleitzahl;

    public function withKontonummer(int $Kontonummer): self
    {
        $new = clone $this;
        $new->Kontonummer = $Kontonummer;

        return $new;
    }

    public function withBankleitzahl(int $Bankleitzahl): self
    {
        $new = clone $this;
        $new->Bankleitzahl = $Bankleitzahl;

        return $new;
    }
}

