<?php

namespace PlusForta\RuVSoapBundle\Type;

class NamePersonGemeinschaftTyp
{

    /**
     * @var mixed
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
     * @var string
     */
    private $Namenszusatz;

    /**
     * @return mixed
     */
    public function getAnrede()
    {
        return $this->Anrede;
    }

    /**
     * @param mixed $Anrede
     * @return NamePersonGemeinschaftTyp
     */
    public function withAnrede($Anrede)
    {
        $new = clone $this;
        $new->Anrede = $Anrede->toString();

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
     * @return NamePersonGemeinschaftTyp
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
     * @return NamePersonGemeinschaftTyp
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
     * @return NamePersonGemeinschaftTyp
     */
    public function withNachname($Nachname)
    {
        $new = clone $this;
        $new->Nachname = $Nachname;

        return $new;
    }

    /**
     * @return string
     */
    public function getNamenszusatz()
    {
        return $this->Namenszusatz;
    }

    /**
     * @param string $Namenszusatz
     * @return NamePersonGemeinschaftTyp
     */
    public function withNamenszusatz($Namenszusatz)
    {
        $new = clone $this;
        $new->Namenszusatz = $Namenszusatz;

        return $new;
    }


}

