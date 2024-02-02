<?php


namespace PlusForta\RuVSoapBundle\Type;


class VorgangsnummerTyp
{
    private string $Vorgangsnummer;

    public function withVorgangsnummer(string $Vorgangsnummer): self
    {
        $new = clone $this;
        $new->Vorgangsnummer = $Vorgangsnummer;

        return $new;
    }
}