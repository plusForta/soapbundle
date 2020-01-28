<?php

namespace PlusForta\RuVSoapBundle\Type;

class RechtsgeschaeftTyp
{

    /**
     * @var int
     */
    private $Arbeitsgebiet;

    /**
     * @var int
     */
    private $Versicherungsnummer;

    /**
     * @return int
     */
    public function getArbeitsgebiet(): int
    {
        return $this->Arbeitsgebiet;
    }

    /**
     * @param int $Arbeitsgebiet
     * @return RechtsgeschaeftTyp
     */
    public function withArbeitsgebiet(int $Arbeitsgebiet): RechtsgeschaeftTyp
    {
        $new = clone $this;
        $new->Arbeitsgebiet = $Arbeitsgebiet;

        return $new;
    }

    /**
     * @return int
     */
    public function getVersicherungsnummer(): int
    {
        return $this->Versicherungsnummer;
    }

    /**
     * @param int $Versicherungsnummer
     * @return RechtsgeschaeftTyp
     */
    public function withVersicherungsnummer(int $Versicherungsnummer): RechtsgeschaeftTyp
    {
        $new = clone $this;
        $new->Versicherungsnummer = $Versicherungsnummer;

        return $new;
    }


}

