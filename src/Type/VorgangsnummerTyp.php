<?php


namespace PlusForta\RuVSoapBundle\Type;

class VorgangsnummerTyp
{
    /**
     * @var string
     */
    private $Vorgangsnummer;

    public function withVorgangsnummer(string $Vorgangsnummer): VorgangsnummerTyp
    {
        $new = clone $this;
        $new->Vorgangsnummer = $Vorgangsnummer;

        return $new;
    }
}
