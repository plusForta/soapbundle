<?php

namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

class NameJuristischePersonTyp
{
    public const MAX_LENGTH_NAMENSZUSATZ = 30;
    public const MAX_LENGTH_NAME = 30;

    private string $Anrede;
    private string $Name;
    private string $Namenszusatz;

    public function withAnrede(AnredeTyp $Anrede): self
    {
        $new = clone $this;
        $new->Anrede = $Anrede->toString();

        return $new;
    }

    public function withName(string $Name): self
    {
        Assert::maxLength($Name, self::MAX_LENGTH_NAME);
        $new = clone $this;
        $new->Name = $Name;

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

