<?php

namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

/**
 * @property string|null Titel
 * @property string|null Namenszusatz
 */
class NameNatuerlichePersonTyp
{
    public const MAX_LENGTH_TITEL = 10;
    public const MAX_LENGTH_VORNAME = 30;
    public const MAX_LENGTH_NACHNAME = 30;
    public const MAX_LENGTH_NAMENSZUSATZ = 30;

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
            Assert::maxLength($Titel, self::MAX_LENGTH_TITEL);
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
        Assert::maxLength($Vorname, self::MAX_LENGTH_VORNAME);
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
        Assert::maxLength($Nachname, self::MAX_LENGTH_NACHNAME);
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
            Assert::maxLength($Namenszusatz, self::MAX_LENGTH_NAMENSZUSATZ);
            $new->Namenszusatz = $Namenszusatz;
        }

        return $new;
    }
}
