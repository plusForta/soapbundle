<?php

namespace PlusForta\RuVSoapBundle\Type;

class VorgangsnummernTyp
{
    /**
     * @var string
     */
    private $Vorgangsnummer;

    /**
     * @return string
     */
    public function getVorgangsnummer()
    {
        return $this->Vorgangsnummer;
    }

    /**
     * @param string $Vorgangsnummer
     * @return VorgangsnummernTyp
     */
    public function withVorgangsnummer($Vorgangsnummer)
    {
        $new = clone $this;
        $new->Vorgangsnummer = $Vorgangsnummer;

        return $new;
    }
}
