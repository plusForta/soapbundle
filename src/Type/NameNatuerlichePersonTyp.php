<?php

namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

/**
 * @property string|null Titel
 * @property string|null Namenszusatz
 */
class NameNatuerlichePersonTyp
{

    /**
     * @var mixed
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
     * @param AnredeTyp $Anrede
     * @return NameNatuerlichePersonTyp
     */
    public function withAnrede(AnredeTyp $Anrede): NameNatuerlichePersonTyp
    {
        $new = clone $this;
        $new->Anrede = $Anrede->toString();

        return $new;
    }

    /**
     * @param ?string $Titel
     * @return NameNatuerlichePersonTyp
     */
    public function withTitel(?string $Titel): NameNatuerlichePersonTyp
    {
        $new = clone $this;
        if ($Titel !== null) {
            Assert::maxLength($Titel, 10);
            $new->Titel = $Titel;
        }

        return $new;
    }

    /**
     * @param string $Vorname
     * @return NameNatuerlichePersonTyp
     */
    public function withVorname(string $Vorname)
    {
        Assert::maxLength($Vorname, 30);
        $new = clone $this;
        $new->Vorname = $Vorname;

        return $new;
    }

    /**
     * @param string $Nachname
     * @return NameNatuerlichePersonTyp
     */
    public function withNachname(string $Nachname): NameNatuerlichePersonTyp
    {
        Assert::maxLength($Nachname, 30);
        $new = clone $this;
        $new->Nachname = $Nachname;

        return $new;
    }

    /**
     * @param ?string $Namenszusatz
     * @return NameNatuerlichePersonTyp
     */
    public function withNamenszusatz(?string $Namenszusatz): NameNatuerlichePersonTyp
    {
        $new = clone $this;
        if ($Namenszusatz !== null) {
            Assert::maxLength($Namenszusatz, 30);
            $new->Namenszusatz = $Namenszusatz;
        }

        return $new;
    }


}

