<?php

namespace PlusForta\RuVSoapBundle\Type;

class ZugriffsschluesselTyp
{
    /**
     * @var string
     */
    private $Vorgangsnummer;

    /**
     * @var \PlusForta\RuVSoapBundle\Type\RechtsgeschaeftTyp
     */
    private $Rechtsgeschaeft;

    /**
     * @return string
     */
    public function getVorgangsnummer()
    {
        return $this->Vorgangsnummer;
    }

    /**
     * @param string $Vorgangsnummer
     * @return ZugriffsschluesselTyp
     */
    public function withVorgangsnummer($Vorgangsnummer)
    {
        $new = clone $this;
        $new->Vorgangsnummer = $Vorgangsnummer;

        return $new;
    }

    /**
     * @return \PlusForta\RuVSoapBundle\Type\RechtsgeschaeftTyp
     */
    public function getRechtsgeschaeft()
    {
        return $this->Rechtsgeschaeft;
    }

    /**
     * @param \PlusForta\RuVSoapBundle\Type\RechtsgeschaeftTyp $Rechtsgeschaeft
     * @return ZugriffsschluesselTyp
     */
    public function withRechtsgeschaeft($Rechtsgeschaeft)
    {
        $new = clone $this;
        $new->Rechtsgeschaeft = $Rechtsgeschaeft;

        return $new;
    }
}
