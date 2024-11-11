<?php

namespace PlusForta\RuVSoapBundle\Type;

class NamePersonGemeinschaftOhneNamenszusatzTyp
{
    /**
     * @var string
     */
    private $Anrede;

    /**
     * @var string
     */
    private $Titel;

    /**
     * @var string
     */
    private $Vorname;

    /**
     * @var string
     */
    private $Nachname;

    /**
     * @return string
     */
    public function getAnrede()
    {
        return $this->Anrede;
    }

    /**
     * @param string $Anrede
     * @return NamePersonGemeinschaftOhneNamenszusatzTyp
     */
    public function withAnrede($Anrede)
    {
        $new = clone $this;
        $new->Anrede = $Anrede;

        return $new;
    }

    /**
     * @return string
     */
    public function getTitel()
    {
        return $this->Titel;
    }

    /**
     * @param string $Titel
     * @return NamePersonGemeinschaftOhneNamenszusatzTyp
     */
    public function withTitel($Titel)
    {
        $new = clone $this;
        $new->Titel = $Titel;

        return $new;
    }

    /**
     * @return string
     */
    public function getVorname()
    {
        return $this->Vorname;
    }

    /**
     * @param string $Vorname
     * @return NamePersonGemeinschaftOhneNamenszusatzTyp
     */
    public function withVorname($Vorname)
    {
        $new = clone $this;
        $new->Vorname = $Vorname;

        return $new;
    }

    /**
     * @return string
     */
    public function getNachname()
    {
        return $this->Nachname;
    }

    /**
     * @param string $Nachname
     * @return NamePersonGemeinschaftOhneNamenszusatzTyp
     */
    public function withNachname($Nachname)
    {
        $new = clone $this;
        $new->Nachname = $Nachname;

        return $new;
    }
}
