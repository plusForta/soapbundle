<?php


namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

class AnredeHerrFrauTyp
{
    public const HERR = 'Herr';
    public const FRAU = 'Frau';
    public const DIVERS = 'Divers'; // need to switch to WSDL 2023 for this

    private ?string $Anrede;

    public function withAnrede(string $andrede): self
    {
        Assert::oneOf($andrede, [
            self::HERR,
            self::FRAU,
            self::DIVERS,
            '',
        ]);
        $new = clone $this;
        $new->Anrede = $andrede;

        return $new;
    }

    public function toString(): string
    {
        return $this->Anrede;
    }
}
