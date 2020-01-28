<?php

namespace PlusForta\RuVSoapBundle\Type;

/**
 * @property string|null Titel
 * @property string|null Namenszusatz
 */
class NameNatuerlichePersonHerrFrauTyp
{

    /**
     * @var string
     */
    private $Anrede;

    /**
     * @var string
     */
    private $Vorname;

    /**
     * @var string
     */
    private $Nachname;


    /**
     * @param AnredeHerrFrauTyp $Anrede
     * @return NameNatuerlichePersonHerrFrauTyp
     */
    public function withAnrede(AnredeHerrFrauTyp $Anrede): NameNatuerlichePersonHerrFrauTyp
    {
        $new = clone $this;
        $new->Anrede = $Anrede->toString();

        return $new;
    }

    /**
     * @param ?string $Titel
     * @return NameNatuerlichePersonHerrFrauTyp
     */
    public function withTitel(?string $Titel): NameNatuerlichePersonHerrFrauTyp
    {
        $new = clone $this;
        if ($Titel !== null) {
            $new->Titel = $Titel;
        }

        return $new;
    }

    /**
     * @param string $Vorname
     * @return NameNatuerlichePersonHerrFrauTyp
     */
    public function withVorname(string $Vorname): NameNatuerlichePersonHerrFrauTyp
    {
        $new = clone $this;
        $new->Vorname = $Vorname;

        return $new;
    }

    /**
     * @param string $Nachname
     * @return NameNatuerlichePersonHerrFrauTyp
     */
    public function withNachname(string $Nachname): NameNatuerlichePersonHerrFrauTyp
    {
        $new = clone $this;
        $new->Nachname = $Nachname;

        return $new;
    }

    /**
     * @param ?string $Namenszusatz
     * @return NameNatuerlichePersonHerrFrauTyp
     */
    public function withNamenszusatz(?string $Namenszusatz): NameNatuerlichePersonHerrFrauTyp
    {
        $new = clone $this;
        if ($Namenszusatz !== null) {
            $new->Namenszusatz = $Namenszusatz;
        }

        return $new;
    }


}

