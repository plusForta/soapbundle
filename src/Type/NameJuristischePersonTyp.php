<?php

namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

/**
 * @property string Namenszusatz
 */
class NameJuristischePersonTyp
{
    public const MAX_LENGTH_NAMENSZUSATZ = 30;
    public const MAX_LENGTH_NAME = 30;

    /**
     * @var string
     */
    private $Anrede;

    /**
     * @var string
     */
    private $Name;

    /**
     * @param AnredeTyp $Anrede
     * @return NameJuristischePersonTyp
     */
    public function withAnrede(AnredeTyp $Anrede): NameJuristischePersonTyp
    {
        $new = clone $this;
        $new->Anrede = $Anrede->toString();

        return $new;
    }

    /**
     * @param string $Name
     * @return NameJuristischePersonTyp
     */
    public function withName(string $Name)
    {
        Assert::maxLength($Name, self::MAX_LENGTH_NAME);
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @param ?string $Namenszusatz
     * @return NameJuristischePersonTyp
     */
    public function withNamenszusatz(?string $Namenszusatz): NameJuristischePersonTyp
    {
        $new = clone $this;
        if ($Namenszusatz !== null) {
            Assert::maxLength($Namenszusatz, self::MAX_LENGTH_NAMENSZUSATZ);
            $new->Namenszusatz = $Namenszusatz;
        }

        return $new;
    }
}
