<?php


namespace PlusForta\RuVSoapBundle\Type;

use Webmozart\Assert\Assert;

class AnredeHerrFrauTyp
{
    public const HERR = 'Herr';
    public const FRAU = 'Frau';
    /**
     * @var string
     */
    private $Anrede;

    public function withAnrede(string $andrede): AnredeHerrFrauTyp
    {
        Assert::oneOf($andrede, [
            self::HERR,
            self::FRAU,
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
