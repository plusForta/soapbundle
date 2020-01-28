<?php

namespace PlusForta\RuVSoapBundle\Type;

class LastschriftverfahrenTyp
{

    /**
     * @var int
     */
    private $Kontonummer;

    /**
     * @var int
     */
    private $Bankleitzahl;

    /**
     * @param int $Kontonummer
     * @return LastschriftverfahrenTyp
     */
    public function withKontonummer(int $Kontonummer): LastschriftverfahrenTyp
    {
        $new = clone $this;
        $new->Kontonummer = $Kontonummer;

        return $new;
    }

    /**
     * @param int $Bankleitzahl
     * @return LastschriftverfahrenTyp
     */
    public function withBankleitzahl(int $Bankleitzahl): LastschriftverfahrenTyp
    {
        $new = clone $this;
        $new->Bankleitzahl = $Bankleitzahl;

        return $new;
    }


}

