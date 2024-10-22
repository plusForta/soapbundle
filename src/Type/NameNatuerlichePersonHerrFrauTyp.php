<?php

namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

class NameNatuerlichePersonHerrFrauTyp
{
    public const MAX_LENGTH_TITEL = 10;
    public const MAX_LENGTH_VORNAME = 30;
    public const MAX_LENGTH_NACHNAME = 30;
    public const MAX_LENGTH_NAMENSZUSATZ = 30;

    private string $Anrede;
    private string $Vorname;
    private string $Nachname;
    private ?string $Titel = null;
    private ?string $Namenszusatz = null;

    public function withAnrede(AnredeHerrFrauTyp $Anrede): self
    {
        $new = clone $this;
        $new->Anrede = $Anrede->toString();

        return $new;
    }

    public function withTitel(?string $Titel): self
    {
        $new = clone $this;
        if ($Titel !== null) {
            Assert::maxLength($Titel, self::MAX_LENGTH_TITEL);
            $new->Titel = $Titel;
        }

        return $new;
    }

    public function withVorname(string $Vorname): self
    {
        Assert::maxLength($Vorname, self::MAX_LENGTH_VORNAME);
        $new = clone $this;
        $new->Vorname = $Vorname;

        return $new;
    }

    public function withNachname(string $Nachname): self
    {
        Assert::maxLength($Nachname, self::MAX_LENGTH_NACHNAME);
        $new = clone $this;
        $new->Nachname = $Nachname;

        return $new;
    }

    public function withNamenszusatz(?string $Namenszusatz): self
    {
        $new = clone $this;
        if ($Namenszusatz !== null) {
            Assert::maxLength($Namenszusatz, self::MAX_LENGTH_NAMENSZUSATZ);
            $new->Namenszusatz = $Namenszusatz;
        }

        return $new;
    }
}
