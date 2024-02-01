<?php


namespace PlusForta\RuVSoapBundle\Type;


class VorgangsnummerTyp
{
    private string $Vorgangsnummer;

    public function withVorgangsnummer(string $Vorgangsnummer): VorgangsnummerTyp
    {
        $new = clone $this;
        $new->Vorgangsnummer = $Vorgangsnummer;

        return $new;
    }
}