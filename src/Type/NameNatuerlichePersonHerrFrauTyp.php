<?php

namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

/**
 * @property string|null Titel
 * @property string|null Namenszusatz
 */
class NameNatuerlichePersonHerrFrauTyp
{
    public const MAX_LENGTH_TITEL = 10;
    public const MAX_LENGTH_VORNAME = 30;
    public const MAX_LENGTH_NACHNAME = 30;
    public const MAX_LENGTH_NAMENSZUSATZ = 30;

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
            Assert::maxLength($Titel, self::MAX_LENGTH_TITEL);
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
        Assert::maxLength($Vorname, self::MAX_LENGTH_VORNAME);
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
        Assert::maxLength($Nachname, self::MAX_LENGTH_NACHNAME);
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
            Assert::maxLength($Namenszusatz, self::MAX_LENGTH_NAMENSZUSATZ);
            $new->Namenszusatz = $Namenszusatz;
        }

        return $new;
    }
}
